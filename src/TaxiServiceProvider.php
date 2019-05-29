<?php
/**
 * Created by PhpStorm.
 * User: zhangzhenwei
 * Date: 2019/5/29
 * Time: 11:47
 */

namespace Ritin\Taxi;

use Illuminate\Support\ServiceProvider;

class TaxiServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //
    }

    public function register()
    {

        $this->app->singleton('taxi', function () {
            return new Taxi;
        });
    }
}