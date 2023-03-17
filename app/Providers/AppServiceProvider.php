<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }
    public function boot()
    {
        Paginator::defaultView("vendor.pagination.bootstrap-5");
        Paginator::defaultSimpleView("vendor.pagination.bootstrap-5");
    }
}
