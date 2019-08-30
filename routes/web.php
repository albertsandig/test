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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('workorders','WorkordersController');

Route::resource('mailbox','EmailsController');

Route::resource('sms','SmsController');

Route::get('/sms/read-sms/{id}', 'SmsController@getSMSbyId');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
