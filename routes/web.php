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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/cabinet', 'CabinetController@index')->name('cabinet');
Route::get('/cabinet/properties/add', function (){

    return  view('cabinet.propertyAdd');
});
Route::post('/cabinet/properties/add', 'CabinetController@addProperty')->name('addproperty');
Route::get('/cabinet/plans', 'CabinetController@plans')->name('plans');
