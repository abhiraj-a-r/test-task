<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Route1\firstTable;
use App\Http\Controllers\Route2\secondTable;
use App\Http\Controllers\Auth\ForgotPassword;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('show-table', [firstTable::class, 'showTable'])->name('show-table');
Route::get('show-products-table', [secondTable::class, 'showTable'])->name('show-products-table');
// Route::get('show-products-table', [secondTable::class, 'showTable'])->name('show-products-table');
// Route::get('change-password', [ForgotPassword::class, 'showForgotPasswordForm'])->name('showProfile');
Route::get('/auth/forgot-password', [ForgotPassword::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('forgot-password', [ForgotPassword::class, 'processForgotPassword'])->name('password.email');
// Route::post('/forgot-password', 'Auth\ForgotPasswordController@processForgotPassword')->name('password.email');
