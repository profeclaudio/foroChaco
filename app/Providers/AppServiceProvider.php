<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use App\Publication;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     public function boot()
     {
      //  view()->composer('layout.app', function($view)
      //  {
      //    $publications = Publication::orderBy('id','desc')->paginate(3);
      //    $view->with('publications', $publications);
      //  });
       $publications = Publication::orderBy('id','desc')->paginate(3);

       view()->share('publications', $publications);

         Schema::defaultStringLength(191);
     }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
