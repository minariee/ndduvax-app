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
Route::get('/admin-dashboard', '\App\Http\Controllers\AdminDashboardController@index')->name('adminDashboard');
Route::get('/blog', '\App\Http\Controllers\BlogController@index');
Route::get('/admin-table', '\App\Http\Controllers\AdminTableController@index');
Route::get('/admin-form', '\App\Http\Controllers\AdminTableFormController@index');
Route::post('/admin-form', '\App\Http\Controllers\AdminTableFormController@submit');

Route::get('edit-admin/{id}','\App\Http\Controllers\AdminTableFormController@edit');
Route::put('update-account/{id}','\App\Http\Controllers\AdminTableFormController@update');

Route::delete('delete-admin/{id}','\App\Http\Controllers\AdminTableFormController@delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
