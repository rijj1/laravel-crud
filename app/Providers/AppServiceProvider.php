<?php

namespace App\Providers;

use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Gate::policy(Post::class, PostPolicy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Gate::policy(Post::class, PostPolicy::class);
        // create_post, edit_post, delete_post
        // Gate::define('create_post', function(){
        //     return Auth::user()->is_admin;
        // });

        // Gate::define('edit_post', function(){
        //     return Auth::user()->is_admin;
        // });

        // Gate::define('delete_post', function(){
        //     return Auth::user()->is_admin;
        // });
    }
}
