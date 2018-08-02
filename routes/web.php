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

Route::get('/', 'Controller@getLogin');
Route::get('/login', 'Controller@getLogin');
Route::get('/restorepassword', 'Controller@getRestorePassword');
Route::get('/createacount', 'Controller@getCreateAcount');

Route::get('/lockscreen', 'Controller@getLockScreen');
Route::get('/logout', 'Controller@getLogOut');

Route::get('/transmitionsVw', 'TransmitionController@index');
Route::post('/roles', 'RolesController@store');
Route::post('/users', 'UsersController@postUsers');
Route::post('/registerusers', 'UsersController@postRegisterUsers')->name('registerusers');
Route::post('/usersbyid/{id}', 'UsersController@postUserById')->name('usersbyid');
Route::get('/destroyusers/{id}', 'UsersController@destroy')->name('destroyusers');

Route::prefix('admin')->group(function () {
   Route::get('/dashboard', 'Controller@getDashboard')->name('dashboard');
   Route::get('users', 'UsersController@create')->name('users');
   Route::get('reports/datetimepickers', 'ReportsController@getDateTimePickers')->name('datetimepickers');
});