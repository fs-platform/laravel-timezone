<?php

namespace Aron\Timezone\Provider;

use Aron\Timezone\Service\TimezoneService;
use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('Timezone', TimezoneService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // 发布配置文件
        $this->publishes([
            __DIR__ . '/../../config/timezone.php' => config_path('timezone.php'),
        ]);
    }
}
