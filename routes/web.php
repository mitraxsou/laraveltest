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
//Route::get('/login','Admin\LoginController@login');

//ading resource controller

Route::resource('/res','Admin\ResourceController');

//adding variable using compact function to the blade templade

Route::get('/getpara/{var1}/{var2}','Controller@passParameters');

//testModelsignup

Route::get('/testModel','testModelController@create');

Route::post('/testModel','testModelController@store');

//testmodellogin
Route::group([ 'middleware'=>'auth'],function()
{
Route::get('/testModelLogin','testModelController@login');
Route::get('/testModelUser','testModelController@showUser');
Route::post('/testModelLogin','testModelController@index')->name('login2');
});

//added by php artisan make:Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//another way to add middleware in route
Route::get('/testModelUser2','testModelController@showUser')->middleware('auth');

