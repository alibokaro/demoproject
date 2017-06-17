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

Route::get('/', 'Auth\LoginController@ShowLoginForm');

Auth::routes();

Route::get('/dashboard', 'HomeController@index');
Route::post('/add', 'HomeController@add');
Route::post('/validation', 'HomeController@Formvalidation');

Route::get('getEditStudent/{student_id?}','HomeController@getSingleStudent');

Route::put('addedit/{student_id?}','HomeController@updateSingleStudent');
Route::get('delete/{student_id?}','HomeController@deleteSingleStudent');


//Route::get('home', 'HomeController@getList');
