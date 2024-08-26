<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
  
This project is the handiwork of Kwaku Hope from Ghana. Enjoy my email is
roreouel@yahoo.com/roreouel@gmail.com
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* ==========================================
* Form Data Routes
========================================== */
Route::resource('formData',App\Http\Controllers\ACController::class);
Route::post('/searchdata',[App\Http\Controllers\ACController::class,'autoComplete'])->name('searchdata');


