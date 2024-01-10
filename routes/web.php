<?php

use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::get('forgot-password', [ResetPasswordController::class, 'forgot_password']);

Route::get('register', [UserController::class, 'register']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/profile',[ProfileController::class,'profile']);

    Route::get('admin/support',[SupportController::class,'index']);
    Route::get('admin/ticket/create', [TicketController::class, 'index']);
});