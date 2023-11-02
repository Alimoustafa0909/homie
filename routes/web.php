<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PropertyController;
use Illuminate\Support\Facades\Route;

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

Route::resource('contact', ContactController::class)->only(['index', 'store']);
Route::get('/', [HomeController::class, 'index'])->name('web.home');
Route::get('myProperties', [PropertyController::class, 'myProperty'])->name('myProperty');
Route::resource('property', PropertyController::class);

Route::view('/admins/login', 'auth.admin_login')->name('admins.login-form');
Route::post('/dashboard/login', [AuthController::class, 'dashboardLogin'])->name('admins.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('dashboard.logout');
