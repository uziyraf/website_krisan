<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View; 
use App\Models\Visitor; 
use Illuminate\Support\Facades\Schema; 

class AppServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
    
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
            URL::forceScheme('https');
        }

        if (Schema::hasTable('visitors')) {
            $totalVisitors = Visitor::count(); 

            View::share('totalVisitors', $totalVisitors);
        }
    }
}