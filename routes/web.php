<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/order', function () {
    return view('welcome');
});

Route::get('/t', function () {
    event(new \App\Events\SendMessage('martin'));
//    \App\Models\Order::createOrder();
//    return 'created';
});

Route::get('/s',function (){
    \Illuminate\Support\Facades\Log::info('Web.php route');
    broadcast(new \App\Events\SendStatus());
//    event(new \App\Events\SendStatus());
//    $order = \App\Models\Order::where('customer',\Illuminate\Support\Facades\Auth::id())->first();
//    $order->updateProgress('payment'.time());
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/react',[App\Http\Controllers\HomeController::class, 'react'])->name('react');