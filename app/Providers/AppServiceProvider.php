<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Model\ServiceCategory;
use App\Model\CourseCategory;
use App\Model\Event;
use DB;
use View;

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
    public function boot()
    {
        
        Schema::defaultStringLength(191);

             View::composer(('frontend.partial.header'),function($view){
            $serviceNames=ServiceCategory::all();
            $view->with('serviceNames',$serviceNames);
        });

            View::composer(('frontend.partial.header'),function($view){
            $courseCategoryNames=CourseCategory::where('sub_category',null)->get();
            $view->with('courseCategoryNames',$courseCategoryNames);
        });


             View::composer(('frontend.partial.header'),function($view){
            $eventNames=Event::all();
            $view->with('eventNames',$eventNames);
        });

      
    }
}
