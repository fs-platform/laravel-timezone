<?php

namespace Aron\Timezone\Service;

class TimezoneService
{
    public array $configInfo;

    public function __construct()
    {
        $this->configInfo = config('timezone');
    }

    /**
     * @Notes: 根据国家code 获取时区
     *
     * @param string $countryCode
     * @return string
     * @author: Aron
     * @Date: 2021/3/25
     * @Time: 11:20 上午
     */
    public function getTimezoneByCountryCode(string $countryCode=''): string
    {
        $source = $this->configInfo['source'];
        $data = collect($source);
        $return = $data->where('code', $countryCode);
        if($return->isEmpty()){
            return $this->configInfo['default_timezone'];
        }
        $return = $return->shift();
        return $return ? $return['timezone'] : $this->configInfo['default_timezone'];
    }
}
