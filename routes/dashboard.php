<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['web', 'auth:admins']], function () {
    Route::view('/', 'dashboard.index');
    Route::resource('admins', 'AdminController');
    Route::resource('users', 'UserController');
    Route::resource('contact', 'ContactController')->except(['store', 'create', 'edit', 'update']);
    Route::resource('property', 'PropertyController')->only(['index', 'destroy','show']);


    Route::post('/logout', 'AdminController@logout')->name('logout');

});
