<?php

use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkPlatformController;
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

Route::get('/logout',[LoginController::class,'logout']);


Route::get('/account/recovery',[ResetPasswordController::class,'forgot_password']);
Route::post('/login/forgot-password',[ResetPasswordController::class,'submitForgetPasswordForm']);
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/admin/dashboard',[DashboardController::class,'dashboard'])->middleware('checksession');

Route::get('/admin/profile',[ProfileController::class,'profile'])->middleware('checksession');
Route::post('/admin/profile/store',[ProfileController::class,'store'])->middleware('checksession');
Route::post('/admin/profile/update',[ProfileController::class,'update'])->middleware('checksession');
Route::post('/admin/profile/contact/store',[ProfileController::class,'storecontact'])->middleware('checksession');
Route::post('/admin/profile/contact/update',[ProfileController::class,'updateContact'])->middleware('checksession');
Route::post('/admin/profile/workplatform/store',[WorkPlatformController::class,'store'])->middleware('checksession');
Route::get('/admin/profile/workplatform/delete/{id}',[WorkPlatformController::class,'destroy'])->middleware('checksession');
Route::get('/admin/profile/account-setting',[AccountSettingController::class,'accountsetting'])->middleware('checksession');

Route::get('/admin/apps/contacts',[ContactController::class,'index'])->middleware('checksession');
Route::post('/admin/contacts',[ContactController::class,'store'])->middleware('checksession');


Route::get('/storage',function(){
    Artisan::call("storage:link");
});
