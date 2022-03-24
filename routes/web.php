<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserListController;

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
Route::get('/user-dashboard', '\App\Http\Controllers\UserDashboardController@index')->name('user-dashboard');
Route::get('/privacy-policy', '\App\Http\Controllers\PrivacyPolicyController@index');
//Route::get('/admin-dashboard', '\App\Http\Controllers\AdminDashboardController@index')->name('adminDashboard');
//Route::get('/en/blog');
Route::get('/admin-table', '\App\Http\Controllers\AdminTableController@index');
Route::get('/admin-form', '\App\Http\Controllers\AdminTableFormController@index');
Route::get('/user-list', '\App\Http\Controllers\UserListController@index');
Route::resource('users', UserListController::class); 
Route::post('users/{id}', 'UserListController@edit')->name('users.edit');
Route::post('/admin-form', '\App\Http\Controllers\AdminTableFormController@submit');

Route::get('edit-admin/{id}','\App\Http\Controllers\AdminTableFormController@edit');
Route::put('update-account/{id}','\App\Http\Controllers\AdminTableFormController@update');

Route::delete('delete-admin/{id}','\App\Http\Controllers\AdminTableFormController@delete');



Auth::routes();
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin-dashboard', function () {
      return view('adminDashboard');
    })->name('dashboard');
  });


Route::get('/vaccinerecord/{id}', '\App\Http\Controllers\VaccineRecordController@index');
Route::get('/vaccinerecord/{id}', '\App\Http\Controllers\VaccineRecordController@extension');


