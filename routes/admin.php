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
Route::group(['namespace' => 'Auth', 'middleware' => 'guest:admin'], function () {

    Route::get('/login', 'LoginController@loginForm')->middleware('guest:admin');
    Route::post('/login', 'LoginController@login')->name('login');

});

Route::group(['middleware' => 'auth:admin'], function () {
    
    Route::get('/', 'Dashboard')->name('dashboard');

    Route::any('/logout', 'Auth\LogoutController@logout')->name('logout');
});
