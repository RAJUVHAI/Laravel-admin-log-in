<?php

use App\Http\Controllers\HomeController;
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


// Route::get('/' , 'HomeController@Home');

// Route::get('/About' , 'HomeController@About');
 
// Route::get('/Contact' , 'HomeController@Contact');

// Route::get('/', function(){
//     return view('Login');
// });

Route::get('/admin', 'App\Http\Controllers\Admin\AuthController@Index')->name('adminlogin');
