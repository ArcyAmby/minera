<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\SuperAdminMiddleware;

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
        // Register middleware aliases
        $this->registerMiddlewareAliases();
    }

    /**
     * Register middleware aliases.
     */
    protected function registerMiddlewareAliases(): void
    {
        // Admin Middleware
        Route::aliasMiddleware('admin', AdminMiddleware::class);

        // User Middleware
        Route::aliasMiddleware('user', UserMiddleware::class);

        // Guest Middleware
        Route::aliasMiddleware('superadmin', SuperAdminMiddleware::class);
    }
}
