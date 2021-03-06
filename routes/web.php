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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::namespace('App\Http\Controllers\Guest')
->group(function (){
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/contatti', 'HomeController@contatti')->name('contatti');
    Route::get('/whitefit', 'HomeController@whitefit')->name('whitefit');
    Route::get('/whiteteam', 'HomeController@whiteteam')->name('whiteteam');
    Route::post('/sendemail/send', 'HomeController@send');
});
