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
Route::get('/admin-panel', function () {
    return view('layouts.main');
});

//Admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

    Route::group(['prefix' => 'problem'], function(){
        Route::get('/data-master', 'ProblemController@index')->name('data-problem');
        Route::get('/add', 'ProblemController@create')->name('add-problem');
        Route::post('/create', 'ProblemController@store')->name('create-problem');
     });

     Route::group(['prefix'=>'equipment'], function() {
        Route::get('/data-master', 'EquipmentController@index')->name('data-equipment');
     });
});
