<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

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
        if (app()->environment('production')) {
            // Trust all proxies (Heroku dynos are behind a load balancer)
            Request::setTrustedProxies(['0.0.0.0/0'], SymfonyRequest::HEADER_X_FORWARDED_ALL);
            URL::forceScheme('https');
        }
        //
    }
}
