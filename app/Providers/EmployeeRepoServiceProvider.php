<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EmployeeRepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Employee\EmployeeInterface.php', 'App\Repositories\Employee\EmployeeRepository.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //         
    }
}
