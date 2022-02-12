<?php

namespace App\Providers;

use App\Contracts\Parser;
use App\Services\ParserService;
use App\Contracts\Social;
use App\Services\SocialService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->app->bind(
			Parser::class,
			ParserService::class
		);
        $this->app->bind(
			Social::class,
			SocialService::class
		);
    }

    public function boot()
    {
        Paginator::useBootstrap();
    }
}
