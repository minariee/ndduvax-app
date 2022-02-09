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

Route::get('/vaccines', '\App\Http\Controllers\VaccineController@index');
Route::get('/vaccine-form', '\App\Http\Controllers\VaccineFormController@index');
Route::post('/vaccine-form', '\App\Http\Controllers\VaccineFormController@submit');
Route::get('/terms-and-condition', '\App\Http\Controllers\TermsAndConditionController@index');
Route::get('/', '\App\Http\Controllers\HomePageController@index');
Route::get('/user-dashboard', '\App\Http\Controllers\UserDashboardController@index')->name('dashboard');
Route::get('/privacy-policy', '\App\Http\Controllers\PrivacyPolicyController@index');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
