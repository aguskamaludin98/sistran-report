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
    return redirect()->route('login');
});

Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::group(['prefix' => 'admin-panel', 'namespace' => 'Admin', 'middleware' => 'web'], function(){
    Route::get('/', function () {
        return view('layouts.main');
    });

    Route::group(['prefix' => 'problem'], function(){
        Route::get('/data-master', 'ProblemController@index')->name('data-problem');
     });

     Route::group(['prefix'=>'equipment'], function() {
        Route::get('/data-master', 'EquipmentController@index')->name('data-equipment');
        Route::get('/add', 'EquipmentController@create')->name('add-equipment');
        Route::post('/create', 'EquipmentController@store')->name('create-equipment');
     });

     Route::group(['prefix'=>'plan'], function() {
        Route::get('/data-master', 'PlanController@index')->name('data-plan');
        Route::get('/add', 'PlanController@create')->name('add-plan');
        Route::post('/create', 'PlanController@store')->name('create-plan');
     });
});
