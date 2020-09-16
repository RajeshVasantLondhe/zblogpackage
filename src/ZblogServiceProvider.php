<?php
namespace Zivlify\Zblog;

use Illuminate\Support\ServiceProvider;

class ZblogServiceProvider extends ServiceProvider {


    public function boot()
    { 
        // $this->loadRoutesFrom(__DIR__.'/routes/web.php'); 
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/api.php'); 
    }


    public function register()
    {
        
    }
}