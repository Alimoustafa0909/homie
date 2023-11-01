<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\ContactController;
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
Route::view('/', 'web.home')->name('web.home');

Route::get('/properties', [PropertyController::class, 'index'])->name('property_index');
Route::get('/addProperty', [PropertyController::class, 'create'])->name('property_create');
Route::post('/property/store', [PropertyController::class, 'store'])->name('property_store');


Route::view('/admins/login', 'auth.admin_login')->name('admins.login-form');
Route::post('/dashboard/login', [AuthController::class,'dashboardLogin'])->name('admins.login');
Route::post('/logout', [AuthController::class,'logout'])->name('dashboard.logout');
