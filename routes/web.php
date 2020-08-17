<?php

use Illuminate\Support\Facades\Route;

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
/**
 * Frontend Routes
 */
Route::get('/', 'FrontendController@index')->name('home');;
Route::get('login', 'MainController@index')->name('login');
Route::post('/checklogin', 'MainController@checkLogin');
Route::get('/successlogin', 'MainController@successLogin');
Route::get('/logout', 'MainController@logout')->name('logout');;


/**
 * Backend Routes
 */
Route::get('/dashboard', 'BackendController@index');
Route::get('/dashboard/user', 'UserController@index');
