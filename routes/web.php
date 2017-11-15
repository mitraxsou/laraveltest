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

//Route::get('/hello/user', 'Admin\Controller@first');

Route::get('/test','Controller@test');
Route::get('/test/{id}/{name}','Controller@testIdName');
Route::get('/testRedirect','Controller@first');
Route::get('/login','Admin\LoginController@login');

//ading resource controller

Route::resource('/res','Admin\ResourceController');

