<?php

use Illuminate\Support\Facades\Auth;
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

Route::post('/sms-semaphore', '\App\Http\Controllers\SemaphoreController@send');
Route::get('/sms-semaphore', '\App\Http\Controllers\SemaphoreController@index');
Route::get('/vaccines', '\App\Http\Controllers\VaccineController@index');
Route::get('/vaccine-form', '\App\Http\Controllers\VaccineFormController@index');
Route::post('/vaccine-form', '\App\Http\Controllers\VaccineFormController@submit');
Route::get('/terms-and-condition', '\App\Http\Controllers\TermsAndConditionController@index');
Route::get('/', '\App\Http\Controllers\HomePageController@index');
Route::get('/privacy-policy', '\App\Http\Controllers\PrivacyPolicyController@index');
//Route::get('/admin-dashboard', '\App\Http\Controllers\AdminDashboardController@index')->name('adminDashboard');
Route::get('/en/blog');
Route::get('/admin-table', '\App\Http\Controllers\AdminTableController@index');
Route::get('/admin-form', '\App\Http\Controllers\AdminTableFormController@index');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', '\App\Http\Controllers\UserDashboardController@index')->name('dashboard');
    Route::get('/profile', '\App\Http\Controllers\ProfilePictureController@profile');
    Route::get('/avatar/{user}', '\App\Http\Controllers\ProfilePictureController@avatar')->name('avatar');
    Route::put('/profile/{user}', '\App\Http\Controllers\ProfilePictureController@updateavatar')->name('update-avatar');
    Route::get('/vaccinationrecord/download/{account}', '\App\Http\Controllers\ProofOfVaccinationController@download')->name('download-proof-of-vaccination');
    Route::middleware(['role:user'])->group(function () {
        Route::get('/my-vaccinerecord', '\App\Http\Controllers\VaccineRecordController@myRecord')->name('my-vaccinerecord');
    });
    Route::middleware(['role:admin'])->group(function ($route) {
        Route::post('/add-vax/{account}', '\App\Http\Controllers\VaccineController@store')->name('add-vax');
        Route::delete('/delete-vax/{vaccine}', '\App\Http\Controllers\VaccineController@delete')->name('delete-vax');

        Route::get('/admin-dashboard', '\App\Http\Controllers\AdminDashboardController@index')->name('admin-dashboard');
        Route::get('/vaccinerecord', '\App\Http\Controllers\VaccineRecordController@index');
        Route::get('/vaccinerecord/{id}', '\App\Http\Controllers\VaccineRecordController@show')->name('vaccine-record');
        Route::get('/announcement', '\App\Http\Controllers\AnnoucementController@index');
        Route::get('/annoucement/{announcement}', '\App\Http\Controllers\AnnouncementController@show');
        Route::post('/announcement', '\App\Http\Controllers\AnnouncementController@store');
    });
});

// Route::group(['users'], function () {
//     Route::get('/user-list', '\App\Http\Controllers\UserListController@index')->name('users.index');
//     Route::get('/create', '\App\Http\Controllers\UserListController@create')->name('users.create');
//     Route::post('/create', '\App\Http\Controllers\UserListController@store')->name('users.store');
//     Route::get('/{users}/show', '\App\Http\Controllers\UserListController@show')->name('users.show');
//     Route::get('/{users}/edit', '\App\Http\Controllers\UserListController@edit')->name('users.edit');
//     Route::patch('/{users}/update', '\App\Http\Controllers\UserListController@update')->name('users.update');
//     Route::delete('/{users}/delete', '\App\Http\Controllers\UserListController@destroy')->name('users.destroy');
//     Route::post('/{users}/restore', '\App\Http\Controllers\UserListController@restore')->name('users.restore');
//     Route::delete('/{users}/force-delete', '\App\Http\Controllers\UserListController@forceDelete')->name('users.force-delete');
//     Route::post('/restore-all', '\App\Http\Controllers\UserListController@restoreAll')->name('users.restore-all');
// });

Route::post('/admin-form', '\App\Http\Controllers\AdminTableFormController@submit');
Route::get('edit-admin/{id}', '\App\Http\Controllers\AdminTableFormController@edit');
Route::put('update-account/{id}', '\App\Http\Controllers\AdminTableFormController@update');
Route::delete('delete-admin/{id}', '\App\Http\Controllers\AdminTableFormController@delete');

Auth::routes(['register' => false]);
Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm']);
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
