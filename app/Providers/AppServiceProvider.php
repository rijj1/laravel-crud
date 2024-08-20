<?php

namespace App\Providers;

use App\Events\UserRegister;
use App\Listeners\SendWelcomeEmail;
use App\Models\Post;
use App\Observers\PostObserver;
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
        //Gate Policy
        Gate::policy(Post::class, PostPolicy::class);
        //observer
        Post::observe(PostObserver::class);

    }
}
