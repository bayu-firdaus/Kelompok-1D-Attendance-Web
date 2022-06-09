<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\ApiAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'Api\Auth\ApiAuthController@login');
Route::get('area/index', 'Api\Area\ApiAreaController@index');
Route::post('attendance/apiSaveAttendance', 'Api\Attendance\ApiAttendanceController@apiSaveAttendance');

Route::get('/write', function () {return App\Helpers\Helper::write();});
