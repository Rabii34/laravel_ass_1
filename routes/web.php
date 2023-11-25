<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\customcontroller;
// use App\Http\Controllers\customcontroller;

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

Route::get('/home', 
   [customcontroller::class,'index']);

   Route::get('/about', 
   [customcontroller::class,'about']);

   Route::get('/contact', 
   [customcontroller::class,'contact']);






  


