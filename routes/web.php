<?php

use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TermAndConditionController;
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

Route::get('locale/{locale}', [LocalizationController::class, 'setLocale']);

Route::post('login', [LoginController::class, 'login']);

Route::get('forgot-password', [ResetPasswordController::class, 'forgot_password']);

Route::get('register', [UserController::class, 'register']);


Route::group(['middleware' => ['auth', 'lang']], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/terms-and-conditions', [TermAndConditionController::class, 'index']);

    Route::get('admin/profile', [ProfileController::class, 'profile']);

    Route::get('admin/support', [SupportController::class, 'index']);
    Route::get('admin/ticket/create', [TicketController::class, 'index']);

    Route::get('admin/contacts', [ContactController::class, 'index']);
    Route::post('admin/contacts', [ContactController::class, 'store']);
    Route::get('admin/contacts/{id}',[ContactController::class,'destroy']);
    Route::get('admin/contacts/edit/{id}',[ContactController::class,'edit']);
    Route::post('admin/contacts/update',[ContactController::class,'update']);
    Route::get('admin/contacts/view/{id}',[ContactController::class,'show']);

    Route::get('admin/notes', [NotesController::class,'index']);
    Route::post('admin/notes',[NotesController::class,'store']);
    Route::get('admin/notes/{id}', [NotesController::class, 'destroy']);
});
