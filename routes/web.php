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
Route::get('/test', 'TestController@index')->name('test');

Route::group(['middleware' => 'auth'], function () {
    /**
     * Cards Routes
     */

    Route::group(['prefix' => 'cards'], function () {
        Route::get('/', "CardController@index")->name('cards.list');
        Route::get('/create', "CardController@create")->name('card.create');
        Route::post('/store', "CardController@store")->name('card.store');
        Route::get('/show/{id}', "CardController@show")->name('card.show');
        Route::get('/recharge/{id}', "CardController@rechargeForm")->name('card.recharge');
        Route::put('/recharge/{id}', "CardController@recharge")->name('card.recharge');
        Route::get('/discharge/{id}', "CardController@dischargeForm")->name('card.discharge');
        Route::put('/discharge/{id}', "CardController@discharge")->name('card.discharge');
    });
    
    /**
     * Needs Routes
     */

    Route::group(['prefix' => 'needs'], function () {
        Route::get('/', "NeedController@index")->name('needs.list');
        Route::get('/create', "NeedController@create")->name('need.create');
        Route::post('/store', "NeedController@store")->name('need.store');
        Route::get('/show/{id}', "NeedController@show")->name('need.show');
        Route::get('/edit/{id}', "NeedController@edit")->name('need.edit');
        Route::put('/update/{id}', "NeedController@update")->name('need.update');
        Route::delete('/destroy/{id}', "NeedController@destroy")->name('need.destroy');
    });
});