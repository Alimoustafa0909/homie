<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\AgentController;
use App\Http\Controllers\Web\CommentController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PropertyController;


use App\Http\Livewire\SearchComponent;

use App\Http\Controllers\Web\ServiceController;

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

Route::get('/', [HomeController::class, 'index'])->name('web.home');

Route::get('/myProperties/{id}', [PropertyController::class, 'myProperty'])->name('myProperty');
Route::get('/services', [ServiceController::class, 'index'])->name('web.services');

Route::get('/agents', [AgentController::class, 'index'])->name('web.agents');
Route::get('/agent/details/{id}', [AgentController::class, 'agentDetails'])->name('agent.details');
Route::post('/agent/contact/{id}', [AgentController::class, 'agentContact'])->name('agent.contact');
Route::get('/property/search', SearchComponent::class)->name('property.search');

Route::view('/admins/login', 'auth.admin_login')->name('admins.login-form');
Route::post('/dashboard/login', [AuthController::class, 'dashboardLogin'])->name('admins.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('dashboard.logout');

Route::resource('contact', ContactController::class)->only(['index', 'store']);
Route::resource('properties', PropertyController::class);
Route::resource('comments', CommentController::class)->only(['store']);

Route::middleware('auth')->group(function () {
    Route::get('/addProperties', [PropertyController::class, 'create'])->name('properties_create');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
