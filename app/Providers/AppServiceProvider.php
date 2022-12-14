<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use App\Models\Slide;
use App\Models\TheLoai;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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
        //
        Paginator::useBootstrap();
        $theLoai = TheLoai::all();
        $slide = Slide::all();        
        View::share("theloai", $theLoai);
        View::share("slide", $slide);
        
    }
}
