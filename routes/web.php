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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@users')->name('users');
Route::get('/user/{id}', 'UserController@user')->name('user');
Route::bind('id', function ($id) {
    try {
        return \Vinkla\Hashids\Facades\Hashids::decode($id)[0];

    } catch (\Exception $ex) {
        return 0;
    }
});
