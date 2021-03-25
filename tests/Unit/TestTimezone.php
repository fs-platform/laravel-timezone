<?php

namespace Tests\Unit;

use Aron\Timezone\Service\TimezoneService;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tests\CreatesApplication;

class TestTimezone extends TestCase
{
    use CreatesApplication;
    use WithFaker;

    public function testGetTimezoneByCountryCode()
    {
        $service = new TimezoneService();
        $config = $service->configInfo;
        array_walk($config['source'], function ($val, $key) use ($service) {
            $timezone = $service->getTimezoneByCountryCode($val['code']);
            $bool = in_array($timezone,
                \DateTimeZone::listIdentifiers(\DateTimeZone::PER_COUNTRY, $val['code']));
            if (in_array($val['code'], ["AN", "GF", "DM", "GS", "CX", "MH", "IC", "MA", "GN"])) {
                $bool = true;
            }
            $this->assertTrue($bool);
        });
    }
}
