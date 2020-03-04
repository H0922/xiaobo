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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('index/index','Index\Indexcontroller@index');
Route::get('/','Index\LoginController@loginlist');
Route::get('reg/index','Index\LoginController@reglist');
Route::post('reg/insert','Index\LoginController@regins');
Route::post('login/insert','Index\LoginController@loginins');


