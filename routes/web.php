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
//     return view('index');
// });
Route::get('/','CustomersController@Customers');
Route::get('/{dni}','CustomersController@Search');
Route::put('/{dni}','CustomersController@Delete');
Route::get('/register/reg','RegisterController@Customer');
Route::post('/register/reg','RegisterController@CustomerRegister');

