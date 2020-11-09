<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Http\View\Composers\ToppingComposer;
use App\Http\View\Composers\BaseComposer;
use App\Http\View\Composers\PizzaComposer;

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
