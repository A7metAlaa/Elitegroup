<?php

namespace App\Providers;

// use Illuminate\Contracts\View\View;

use App\Models\HomeAbout;
use App\Models\Multipic;
use Illuminate\Pagination\Paginator;
use View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

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
    public function boot(): void
    {
            // $myname = "ahmed";
            // $webname= "ahmedwdeveloper";


            // \View::share(['myname'=>$myname , 'webanem'=>$webname]);
            // return view('admin.slider.index',compact('sliders'));

    
            $sliders = DB::table('sliders')->orderBy('id','DESC')->get();
            \View::share('sliderimages', $sliders);

 
            $homeabout = HomeAbout::latest()->get();
            \View::share('homeabout', $homeabout);
         
            
            $multipicimages= Multipic::all();
            \View::share('multipicimages', $multipicimages);
 
            // View::share(['myname'=>$myname , 'webanem'=>$webname]);
        Paginator::useBootstrap();

    }
}
