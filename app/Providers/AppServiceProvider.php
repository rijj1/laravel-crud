<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // create_post, edit_post, delete_post
        Gate::define('create_post', function(){
            return Auth::user()->is_admin;
        });

        Gate::define('edit_post', function(){
            return Auth::user()->is_admin;
        });

        Gate::define('delete_post', function(){
            return Auth::user()->is_admin;
        });
    }
}
