<?php

namespace Divakar\Contact;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ContactServiceProvider extends SupportServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views','contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migration');
    }

    public function register()
    {
        
    }
}