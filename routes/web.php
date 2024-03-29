<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

    // Route::resource('index', 'WebsiteController');
    // Route::resource('doctors', 'DoctorController');
    // Route::resource('db', 'DashBoardController');
    // ################# HospitalController #################
    // Route::resource('hospitals', 'HospitalController');
    // Route::get('deleteh/{id}','HospitalController@remove');
    // Route::get('modifyh/{id}','HospitalController@modify');
    // Route::put('Update/{id}','HospitalController@update');
    // ################# HospitalController #################

    // ################# CompaniesController #################
    // Route::resource('Companies', 'CompaniesController');
    // Route::get('delete/{id}','CompaniesController@remove');
    // Route::get('modify/{id}','CompaniesController@modify');
    // Route::put('Update/{id}','CompaniesController@update');
    // ################# CompaniesController #################

Auth::routes(
    // ['login'=>false]
);
Route::middleware('auth')->group(function() {
    Route::resource('msg', 'ContactsController');
    Route::resource('doctors', 'DoctorController');
    Route::resource('db', 'DashBoardController');
    ################# HospitalController #################
    Route::resource('hospitals', 'HospitalController');
    Route::get('deleteh/{id}','HospitalController@remove');
    Route::get('modifyh/{id}','HospitalController@modify');
    Route::put('Update/{id}','HospitalController@update');
    ################# HospitalController #################

    ################# CompaniesController #################
    Route::resource('Companies', 'CompaniesController');
    Route::get('delete/{id}','CompaniesController@remove');
    Route::get('modify/{id}','CompaniesController@modify');
    Route::put('Update/{id}','CompaniesController@update');
    ################# CompaniesController #################

    
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'ho'])->name('ho');

Route::post('postlogin', [UserController::class, 'login'])->name('postlogin');
Route::post('postsignup', [UserController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');

Route::resource('index', 'WebsiteController');
Route::get("detail/{id}", [CompaniesController::class,'detial']);
// Route::resource('hospitaldetial/{id}','HospitalDetialController');
// Route::resource("doctordetial/",'DoctorDetialController');
// Route::get("doctordetial/{id}", [DoctorDetialController::class,'index']);
Route::get("detailh/{id}", [HospitalController::class,'detial']);
Route::resource('reservations','ReservationController');

Route::get('test', [LoginController::class, 'index'])->name('test');
Route::middleware(['login'])->group(function () {
});
?>