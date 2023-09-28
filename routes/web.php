<?php

use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/account/recovery', [ResetPasswordController::class, 'forgot_password']);
Route::post('/login/forgot-password', [ResetPasswordController::class, 'submitForgetPasswordForm']);
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->middleware('checksession');


Route::group(['prefix'=>'admin/profile'], function () {
    Route::get('/', [ProfileController::class, 'profile'])->middleware('checksession');
    Route::post('/store', [ProfileController::class, 'store'])->middleware('checksession');
    Route::post('/update', [ProfileController::class, 'update'])->middleware('checksession');
    Route::post('/contact/store', [ProfileController::class, 'storecontact'])->middleware('checksession');
    Route::post('/contact/update', [ProfileController::class, 'updateContact'])->middleware('checksession');
    Route::post('/workplatform/store', [WorkPlatformController::class, 'store'])->middleware('checksession');
    Route::get('/workplatform/delete/{id}', [WorkPlatformController::class, 'destroy'])->middleware('checksession');
    Route::get('/account-setting', [AccountSettingController::class, 'accountsetting'])->middleware('checksession');
});



Route::get('/admin/apps/contacts', [ContactController::class, 'index'])->middleware('checksession');
Route::post('/admin/contacts', [ContactController::class, 'store'])->middleware('checksession');


Route::post('/admin/profile/account-setting/education', [EducationController::class, 'store'])->middleware('checksession');

Route::get('/storage', function () {
    Artisan::call("storage:link");
});
