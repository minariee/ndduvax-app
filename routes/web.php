<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/vaccines', '\App\Http\Controllers\VaccineController@index');
Route::get('/vaccine-form', '\App\Http\Controllers\VaccineFormController@index');
Route::post('/vaccine-form', '\App\Http\Controllers\VaccineFormController@submit');
Route::get('/terms-and-condition', '\App\Http\Controllers\TermsAndConditionController@index');
Route::get('/login-page', '\App\Http\Controllers\LoginPageController@index');
<<<<<<< HEAD
Route::get('/registration-page', '\App\Http\Controllers\RegistrationController@index');
=======
Route::get('/home-page', '\App\Http\Controllers\HomePageController@index');
>>>>>>> d69bc7b6aea62aad2366c8d4cee6a0c2aee29988


