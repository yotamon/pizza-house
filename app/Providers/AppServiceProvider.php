<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Http\View\Composers\ToppingComposer;
use App\Http\View\Composers\BaseComposer;

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
        Paginator::useBootstrap();

        // option 1 - every view
        // View::share('toppings', Topping::orderBy('price')->get());

        // option 2 - specific views
        // View::composer(['pizzas.create', 'toppings.*'], function ($view) {
        //     $view->with('toppings', Topping::orderBy('price')->get());
        // });
        
        // option 3 - Topping Composer class
        View::composer(['pizzas.create', 'toppings.*'], ToppingComposer::class);
        View::composer(['pizzas.create', 'bases.*'], BaseComposer::class);
        View::composer(['pizzas.*'], PizzaComposer::class);


        Relation::morphMap([
            'topping' => \App\Models\Topping::class,
            'base' => \App\Models\Base::class,
        ]);

    }
}
