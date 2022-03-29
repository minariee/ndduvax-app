<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LoginController;
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

Route::post('/sms-semaphore', '\App\Http\Controllers\SemaphoreController@send');
Route::get('/sms-semaphore', '\App\Http\Controllers\SemaphoreController@index');
Route::get('/vaccines', '\App\Http\Controllers\VaccineController@index');
Route::get('/vaccine-form', '\App\Http\Controllers\VaccineFormController@index');
Route::post('/vaccine-form', '\App\Http\Controllers\VaccineFormController@submit');
Route::get('/terms-and-condition', '\App\Http\Controllers\TermsAndConditionController@index');
Route::get('/', '\App\Http\Controllers\HomePageController@index');
Route::get('/user-dashboard', '\App\Http\Controllers\UserDashboardController@index')->name('user-dashboard');
Route::get('/privacy-policy', '\App\Http\Controllers\PrivacyPolicyController@index');
//Route::get('/admin-dashboard', '\App\Http\Controllers\AdminDashboardController@index')->name('adminDashboard');
Route::get('/en/blog');
Route::get('/admin-table', '\App\Http\Controllers\AdminTableController@index');
Route::get('/admin-form', '\App\Http\Controllers\AdminTableFormController@index');

Route::group(['users'], function() {
  Route::get('/user-list', '\App\Http\Controllers\UserListController@index')->name('users.index');
  Route::get('/create', '\App\Http\Controllers\UserListController@create')->name('users.create');
  Route::post('/create', '\App\Http\Controllers\UserListController@store')->name('users.store');
  Route::get('/{users}/show', '\App\Http\Controllers\UserListController@show')->name('users.show');
  Route::get('/{users}/edit', '\App\Http\Controllers\UserListController@edit')->name('users.edit');
  Route::patch('/{users}/update', '\App\Http\Controllers\UserListController@update')->name('users.update');
  Route::delete('/{users}/delete', '\App\Http\Controllers\UserListController@destroy')->name('users.destroy');
  Route::post('/{users}/restore', '\App\Http\Controllers\UserListController@restore')->name('users.restore');
  Route::delete('/{users}/force-delete', '\App\Http\Controllers\UserListController@forceDelete')->name('users.force-delete');
  Route::post('/restore-all', '\App\Http\Controllers\UserListController@restoreAll')->name('users.restore-all');
});


Route::post('/admin-form', '\App\Http\Controllers\AdminTableFormController@submit');
Route::get('edit-admin/{id}','\App\Http\Controllers\AdminTableFormController@edit');
Route::put('update-account/{id}','\App\Http\Controllers\AdminTableFormController@update');
Route::delete('delete-admin/{id}','\App\Http\Controllers\AdminTableFormController@delete');


Auth::routes(['register'=>false]);
Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin-dashboard', function () {
      return view('adminDashboard');
    })->name('dashboard');
  });


Route::get('/vaccinerecord', '\App\Http\Controllers\VaccineRecordController@index');
Route::get('/vaccinerecord/{id}', '\App\Http\Controllers\VaccineRecordController@show');


Route::get('/profile', '\App\Http\Controllers\ProfilePictureController@profile');
Route::post('/profile', '\App\Http\Controllers\ProfilePictureController@updateavatar');



