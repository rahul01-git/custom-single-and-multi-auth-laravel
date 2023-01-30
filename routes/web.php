<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/dashboard', [WebsiteController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/login', [WebsiteController::class, 'login'])->name('login');
Route::post('/login_submit', [WebsiteController::class, 'login_submit'])->name('login_submit');

Route::get('/logout', [WebsiteController::class, 'logout'])->name('logout');

Route::get('/registration', [WebsiteController::class, 'registration'])->name('registration');
Route::post('/registration_submit', [WebsiteController::class, 'registration_submit'])->name('registration_submit');
Route::get('/registration/verify/{token}/{email}', [WebsiteController::class, 'registration_verify']);


Route::get('/forgetPassword', [WebsiteController::class, 'forgetPassword'])->name('forgetPassword');
Route::post('/forgetPassword_submit', [WebsiteController::class, 'forgetPassword_submit'])->name('forgetPassword_submit');
Route::get('reset-password/{token}/{email}',[WebsiteController::class,'resetPassword']);
Route::post('reset-password-submit',[WebsiteController::class,'resetPasswordSubmit'])->name('resetPasswordSubmit');
