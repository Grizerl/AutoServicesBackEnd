<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[App\Http\Controllers\Auto\HomeController::class, 'index']);
Route::middleware('role:Admin')->prefix('admin-panel')->group(function(){ 
    Route::get('/',[App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-home');
});