<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
        public function boot(Dispatcher $event)
    {
        $event->listen(BuildingMenu::class, function (BuildingMenu $event) {
        $event->menu->add(

        );
        if(\Auth::check()){
          if(\Auth::user()->type == 0){
            $event->menu->add(
                ['header' => 'Diagnostics'],
                [
                    'text'       => 'New Diagnosis',
                    'icon_color' => 'red',
                    'url' => route('form')
                ]
                
             );
          }
        }
      });
    }
}
