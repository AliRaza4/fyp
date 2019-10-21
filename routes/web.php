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

//Route::resource('user/dashboard','UsersController\DashboardController');
Route::get('/user/dashboard', 'UsersController\DashboardDisplayController@dashboard')->name('users.dashboard');
Route::get('/user/rates', 'UsersController\DashboardDisplayController@rates')->name('users.rates');
Route::get('/user/coins', 'UsersController\DashboardDisplayController@coins')->name('users.coins');
Route::get('/user/portfolio', 'UsersController\DashboardDisplayController@portfolio')->name('users.portfolio');
Route::get('/user/trade', 'UsersController\DashboardDisplayController@trade')->name('users.trade');
Route::get('/user/explore', 'UsersController\DashboardDisplayController@explore')->name('users.explore');
Route::get('/user/feed', 'UsersController\DashboardDisplayController@feed')->name('users.feed');
