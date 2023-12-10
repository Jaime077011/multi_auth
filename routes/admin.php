<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Backend\Admin\HomeController;
use Illuminate\Support\Facades\Route;


// Admin Authentication

Route::middleware('guest')->group(function () {

    Route::get('admin/login', [AuthenticatedSessionController::class, 'createAdmin'])
    ->name('admin.login');

Route::post('admin/login', [AuthenticatedSessionController::class, 'storeAdmin']);

});


Route::prefix('admin')->middleware(['UserType'])->group(function () {
Route::get('/', [HomeController::class,'index'])->name('admin.home');

});

