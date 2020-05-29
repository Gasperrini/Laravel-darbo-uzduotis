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
    return view('app');
});

Route::resource('trucks', 'TrucksController');

// app/Http/routes.php
Route::get('trucks/create', [
    'uses' => 'TrucksController@create',
    'as' => 'trucks.create'
]);

Route::post('trucks', [
    'uses' => 'TrucksController@store',
    'as' => 'trucks.store'
]);