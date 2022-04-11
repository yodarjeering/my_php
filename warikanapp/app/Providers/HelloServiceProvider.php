<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Composers\HelloComposer;
// use App\Http\Composers;
// use App\Providers\HelloComposer;
// use App\Http\View\Composers;
use Resources\Views;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   
        // 教科書は下の例, hello.indexではなく, indexで動いた
        // View::composer(
        //     'index', function($view){
        //         $view->with('view_message','composer message!');
        //     }
        // );
        // 下のように記述すると動くは動く
        // composerクラス作ったらまた変わる？
        // View::share('view_message','composer message!');

        // Composerクラス作った後のコード

        // View::composer('index',Composers::class);
        View::composer('index',HelloComposer::class); 
    }
}
