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
    return redirect()->route('home');
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
        Route::get('/edit/{id}', "CardController@edit")->name('card.edit');
    });
    
    /**
     * Transations Routes
     */

    Route::group(['prefix' => 'transations'], function () {
        Route::get('/', "TransationController@index")->name('transations.list');
        Route::get('/create/{id}', "TransationController@create")->name('transation.create');
        Route::post('/store/{id}', "TransationController@store")->name('transation.store');
        Route::get('/show/{id}', "TransationController@show")->name('transation.show');
        Route::get('/search/{id?}', "TransationController@search")->name('transations.search');
    });
    
    /**
     * Debits Routes
     */

    Route::group(['prefix' => 'debits'], function () {
        Route::get('/', "DebitController@index")->name('debits.list');
        Route::get('/create', "DebitController@create")->name('debit.create');
        Route::post('/store', "DebitController@store")->name('debit.store');
        Route::get('/show/{id}', "DebitController@show")->name('debit.show');
        Route::get('/edit/{id}', "DebitController@edit")->name('debit.edit');
        Route::put('/update/{id}', "DebitController@update")->name('debit.update');
        Route::delete('/destroy/{id}', "DebitController@destroy")->name('debit.destroy');
    });
    
    /**
     * Debits Logs Routes
     */

    Route::group(['prefix' => 'debits_logs'], function () {
        Route::get('/{id}', "DebitsLogController@index")->name('debits_logs.list');
        Route::get('/create/{id}', "DebitsLogController@create")->name('debits_log.create');
        Route::post('/store/{id}', "DebitsLogController@store")->name('debits_log.store');
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