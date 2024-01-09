<?php

use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkExperienceController;
use App\Http\Controllers\WorkPlatformController;
use App\Models\Education;
use Illuminate\Support\Facades\Artisan;

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
});

Route::get('forgot-password',[ResetPasswordController::class, 'forgot_password']);

Route::get('register',[UserController::class,'register']);

Route::get('admin/dashboard',[DashboardController::class, 'dashboard']);