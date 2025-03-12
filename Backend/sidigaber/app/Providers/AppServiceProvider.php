<?php

namespace App\Providers;
use Illuminate\Support\Facades\ini_set;


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

public function boot()
{
    // Increase upload limits
    ini_set('upload_max_filesize', '50M'); 
    ini_set('post_max_size', '50M');
    ini_set('memory_limit', '256M'); 
    ini_set('max_execution_time', '300');
    ini_set('max_input_time', '300');
}

}
