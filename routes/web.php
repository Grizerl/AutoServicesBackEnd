<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\RepairController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/AdminPanel', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[App\Http\Controllers\Auto\HomeController::class, 'index']);
Route::middleware('role:Admin')->prefix('admin-panel')->group(function(){ 
    Route::get('/',[App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-home');
    Route::resource('repair', RepairController::class);
    Route::resource('client', ClientController::class);
    Route::resource('members', MemberController::class);

});