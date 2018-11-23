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
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('guest');



Route::get('/home', 'HomeController@index');

/*********Only Loginned User Can Accessed***********/

Route::group(['middleware'=>'auth'],function(){

Route::resource('qrcodes', 'QrcodeController');

Route::resource('transcations', 'TranscationController');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

});

/*********Only Loginned User Can Accessed***********/