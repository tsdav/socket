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

Route::get('/', function () {
    return view('welcome');
});
Route::get('currency-update', function () {
    $res = \Illuminate\Support\Facades\Http::get('https://api.monobank.ua/bank/currency');
    dd(json_decode($res->body(), true));
    event(new \App\Events\CurrencyUpdatedEvent());

    return null;
});