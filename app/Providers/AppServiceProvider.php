<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('App\Example',function ()// here everytime a new instance of
            // Example class is created if you want to use just one instance of Example
            // then use $this->app-> singleton('App\Example',function (){}). This will
            // ensure that everytime this class needs to be instantiated the same object
            // will always be returned instead of a new one everytime.
        {
            $collaborator=new \App\Collaborator();
            $foo=config('services.foo');
            return new \App\Example($collaborator,$foo);
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
