<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ToppingController;
use App\Http\Controllers\BaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('index');})->name('home');

// Pizzas
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

// Toppings
Route::get('/toppings', [ToppingController::class, 'index'])->name('toppings')->middleware('auth');
Route::post('/toppings', [ToppingController::class, 'store'])->name('toppings.store')->middleware('auth');
Route::delete('/toppings/{id}', [ToppingController::class, 'destroy'])->name('toppings.destroy')->middleware('auth');

// Bases
Route::get('/bases', [BaseController::class, 'index'])->name('bases')->middleware('auth');
Route::post('/bases', [BaseController::class, 'store'])->name('bases.store')->middleware('auth');
Route::delete('/bases/{id}', [BaseController::class, 'destroy'])->name('bases.destroy')->middleware('auth');

// Disable Register Page
Auth::routes([
    'register' => false
]);

Route::get('/dashboard', [PizzaController::class, 'index'])->name('dashboard');
