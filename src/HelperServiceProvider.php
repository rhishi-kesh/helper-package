<?php

namespace Rkb\Helper;

use Illuminate\Support\ServiceProvider;
use Rkb\Helper\Helpers\Helper;

class HelperServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Helper::class, function () {
            return new Helper();
        });
    }

    public function boot()
    {
        //
    }
}
