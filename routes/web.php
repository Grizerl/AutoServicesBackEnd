<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\RepairController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function (){return redirect('/AutoStyle');});

Route::prefix('AutoStyle')->group(function () {
    Route::get('/', [App\Http\Controllers\Auto\HomeController::class, 'index'])->name('home_auto');    
    Route::prefix('About')->group(function () {
        Route::get('News', [App\Http\Controllers\Auto\AboutController::class, 'index'])->name('vision');
        Route::get('History', [App\Http\Controllers\Auto\AboutController::class, 'history'])->name('history');
    });
    Route::prefix('Pages')->group(function () {
        Route::get('Offer', [App\Http\Controllers\Auto\PageController::class, 'index'])->name('offer');
        Route::get('Pricing/Plan', [App\Http\Controllers\Auto\PageController::class, 'plan'])->name('plan');
        Route::get('Partners', [App\Http\Controllers\Auto\PageController::class, 'partners'])->name('partners');
    });
    Route::prefix('Contacts')->group(function()
    {
        Route::get('Detailed', [App\Http\Controllers\Auto\ContactController::class, 'index'])->name('contacts');
    });
});

Route::get('AdminPanel', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('role:Admin')->prefix('Admin/Panel')->group(function(){ 
    Route::get('/',[App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-home');
    Route::resource('post', PostController::class);
    Route::resource('client', ClientController::class);
    Route::resource('members', MembersController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('repair', RepairController::class);
});