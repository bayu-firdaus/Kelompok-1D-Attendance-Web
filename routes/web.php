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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| admin
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['role:admin']], function() {
    Route::GET('/users', 'Backend\Users\UsersController@index')->name('users');
    Route::GET('/users/add', 'Backend\Users\UsersController@add')->name('users.add');
    Route::POST('/users/create', 'Backend\Users\UsersController@create')->name('users.create');
    Route::GET('/users/edit/{id}', 'Backend\Users\UsersController@edit')->name('users.edit');
    Route::POST('/users/update', 'Backend\Users\UsersController@update')->name('users.update');
    Route::GET('/users/delete/{id}', 'Backend\Users\UsersController@delete')->name('users.delete');

    Route::GET('/settings', 'Backend\Setting\SettingsController@index')->name('settings');
    Route::POST('/settings/update', 'Backend\Setting\SettingsController@update')->name('settings.update');

    Route::GET('/areas', 'Backend\Area\AreaController@index')->name('areas');
    Route::GET('/areas/add', 'Backend\Area\AreaController@add')->name('areas.add');
    Route::POST('/areas/create', 'Backend\Area\AreaController@create')->name('areas.create');
    Route::GET('/areas/edit/{id}', 'Backend\Area\AreaController@edit')->name('areas.edit');
    Route::POST('/areas/update', 'Backend\Area\AreaController@update')->name('areas.update');
    Route::GET('/areas/delete/{id}', 'Backend\Area\AreaController@delete')->name('areas.delete');
    Route::GET('/areas/showAllDataLocation/{id}', 'Backend\Area\AreaController@showAllDataLocation')->name('areas.showAllDataLocation');
    Route::POST('/areas/storeLocation', 'Backend\Area\AreaController@storeLocation')->name('areas.storeLocation');
    Route::POST('/areas/deleteLocationTable', 'Backend\Area\AreaController@deleteLocationTable')->name('areas.deleteLocationTable');

});

/*
|--------------------------------------------------------------------------
| admin|editor|guest
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['role:admin|karyawan']], function() {
    Route::GET('/checkProductVerify', 'MainController@checkProductVerify')->name('checkProductVerify');

    Route::GET('/profile/details', 'Backend\Profile\ProfileController@details')->name('profile.details');
    Route::POST('/profile/update', 'Backend\Profile\ProfileController@update')->name('profile.update');
});


/*
|--------------------------------------------------------------------------
| admin|karyawan
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['role:admin|karyawan']], function() {
    Route::GET('/attendances', 'Backend\Attendance\AttendanceController@index')->name('attendances');
});

Route::post('reinputkey/index/{code}', 'Utils\Activity\ReinputKeyController@index');
