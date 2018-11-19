<?php

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


Route::get('/', 'HomeController@index');
Route::post('/sign-up', 'HomeController@registration');
Route::get('/account/user/verify', 'HomeController@verifyUser');
Route::get('/sign-up/confirm', 'HomeController@confirm');

Route::prefix('admin')->group(function(){

});

Route::prefix('donator')->group(function(){
    Route::get('/account-credit','DonatorController@accountCredit');
    Route::post('/account-credit','DonatorController@accountCredit');
});

Route::prefix('donee')->group(function(){

});

Auth::routes();