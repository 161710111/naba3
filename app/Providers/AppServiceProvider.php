<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::DefaultStringLength(191);
        view()->composer('layouts.frontend', function ($view) {
            $kategori = \App\Kategorie::all();
            // $category = \App\Category::all();
            $recent = \App\Umroh::orderBy('created_at', 'desc')->take(4)->get();
            $view->with(compact('kategori', 'recent'));
        });

        view()->composer('layouts.frontend', function ($view) {
            $kategoria = \App\Kategoria::all();
            // $category = \App\Category::all();
            $recent = \App\Haji::orderBy('created_at', 'desc')->take(4)->get();
            $view->with(compact('kategoria', 'recent'));
        });

        view()->composer('layouts.frontend', function ($view) {
            $kategoriw = \App\Kategoriw::all();
            // $category = \App\Category::all();
            $recent = \App\Wisata::orderBy('created_at', 'desc')->take(4)->get();
            $view->with(compact('kategoriw', 'recent'));
        });

        
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
