<?php

namespace Dataview\SorroUser;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public static function pkgAddr($addr){
      return __DIR__.'/'.$addr;
    }

    public function boot()
    {
      $this->loadViewsFrom(__DIR__.'/views', 'User');
    }

    public function register()
    {
      $this->commands([
        Console\Install::class,
        Console\Remove::class
      ]);

      $this->app['router']->group(['namespace' => 'dataview\sorrouser'], function () {
        include __DIR__.'/routes/web.php';
      });
      $this->app->make('Dataview\SorroUser\UserController');
    }
}