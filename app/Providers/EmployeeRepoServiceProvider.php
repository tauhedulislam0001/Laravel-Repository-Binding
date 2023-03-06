<?php

namespace App\Providers;

use App\Repositories\Employee\EmployeeInterface;
use App\Repositories\Employee\EmployeeRepository;
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
        $this->app->bind(EmployeeInterface::class, EmployeeRepository::class);
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
