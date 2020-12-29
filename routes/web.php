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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'cards'], function () {
        Route::get('/', "CardController@index")->name('cards.list');
        Route::get('/create', "CardController@create")->name('card.create');
        Route::post('/store', "CardController@store")->name('card.store');
        Route::get('/show/{id}', "CardController@show")->name('card.show');
        Route::get('/recharge/{id}', "CardController@rechargeForm")->name('card.recharge');
        Route::put('/recharge/{id}', "CardController@recharge")->name('card.recharge');
    });
});