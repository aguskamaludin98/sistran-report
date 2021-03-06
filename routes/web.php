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
        Route::get('/add', 'ProblemController@create')->name('add-problem');
        Route::post('/create', 'ProblemController@store')->name('create-problem');
        Route::get('/edit/{id}', 'ProblemController@edit')->name('edit-problem');
        Route::get('/update/{id}', 'ProblemController@update')->name('update-problem');
        Route::get('/destroy/{id}', 'ProblemController@destroy')->name('destroy-problem');
     });

     Route::group(['prefix'=>'equipment'], function() {
        Route::get('/data-master', 'EquipmentController@index')->name('data-equipment');
        Route::get('/add', 'EquipmentController@create')->name('add-equipment');
        Route::post('/create', 'EquipmentController@store')->name('create-equipment');
     });

     Route::group(['prefix'=>'project'], function() {
        Route::get('/data-master', 'ProjectController@index')->name('data-project');
        Route::get('/add', 'ProjectController@create')->name('add-project');
        Route::post('/create', 'ProjectController@store')->name('create-project');
     });

     Route::group(['prefix'=>'job_description'], function() {
        Route::get('/data-master', 'JobdescController@index')->name('data-job_description');
        Route::get('/add', 'JobdescController@create')->name('add-job_description');
        Route::post('/create', 'JobdescController@store')->name('create-job_description');
        Route::get('/edit/{id}', 'JobdescController@edit')->name('edit-job_description');
        Route::post('/update/{id}', 'JobdescController@update')->name('update-job_description');
        Route::get('/destroy/{id}', 'JobdescController@destroy')->name('destroy-job_description');
     });

     Route::group(['prefix'=>'plan'], function() {
        Route::get('/data-master', 'PlanController@index')->name('data-plan');
        Route::get('/add', 'PlanController@create')->name('add-plan');
        Route::post('/create', 'PlanController@store')->name('create-plan');
     });
});
