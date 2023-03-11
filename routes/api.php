<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/hospitals',[\App\Http\Controllers\Api\HospitalController::class, 'index']);
Route::get('/hospital/{id}',[\App\Http\Controllers\Api\HospitalController::class, 'show']);

Route::post('/hospitals',[\App\Http\Controllers\Api\HospitalController::class, 'store']);
Route::put('/hospital/{Hospital}',[\App\Http\Controllers\Api\HospitalController::class, 'update']);
Route::delete('/hospital/{Hospital}',[\App\Http\Controllers\Api\HospitalController::class, 'destroy']);

///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/reservations',[\App\Http\Controllers\Api\ReservationController::class, 'index']);
Route::get('/reservation/{id}',[\App\Http\Controllers\Api\ReservationController::class, 'show']);

Route::post('/reservations',[\App\Http\Controllers\Api\ReservationController::class, 'store']);
Route::put('/reservation/{Reservation}',[\App\Http\Controllers\Api\ReservationController::class, 'update']);
Route::delete('/reservation/{Reservation}',[\App\Http\Controllers\Api\ReservationController::class, 'destroy']);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/consultations',[\App\Http\Controllers\Api\ConsultationController::class, 'index']);
Route::get('/consultation/{id}',[\App\Http\Controllers\Api\ConsultationController::class, 'show']);

Route::post('/consultations',[\App\Http\Controllers\Api\ConsultationController::class, 'store']);
Route::put('/consultation/{Consultation}',[\App\Http\Controllers\Api\ConsultationController::class, 'update']);
Route::delete('/consultation/{Consultation}',[\App\Http\Controllers\Api\ConsultationController::class, 'destroy']);




// Route::controller(AuthController::class)->group(function () {
//     Route::post('login', 'login');
//     Route::post('register', 'register');
//     Route::post('logout', 'logout');
//     Route::post('refresh', 'refresh');
//     Route::get('me', 'me');

// });

