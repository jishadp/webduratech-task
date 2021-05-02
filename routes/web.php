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

Route::get('/', ['as'=>'requests','uses'=>'BookingController@requests']);
Route::get('services', ['as'=>'services','uses'=>'BookingController@services']);
Route::get('payments', ['as'=>'payments','uses'=>'BookingController@payments']);
