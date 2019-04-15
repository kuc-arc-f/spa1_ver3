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

//Route::get('/', function () {
//    return view('welcome');
//});
//

//Route::resource('users', 'UsersController');
//Route::post('/users/auth', 'UsersController@auth');
//Route::get('/users/login', 'UsersController@login');
//Route::get('/users/logout', 'UsersController@logout');
//Route::get('/users/test', 'UsersController@test');
//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

//get
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');


