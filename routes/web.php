<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\Frontend\Sponsore\SponsoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:super'])->group(function () {
    Route::get('/super/dashboard', [SuperController::class, 'SuperDashboard'])->name('super.dashboard');
});

//only views


//companies
Route::get('/dashboard/companies', function () {
    return view('user.companies.index');
})->middleware(['auth', 'verified'])->name('companies');
Route::get('/dashboard/companies/show', function () {
    return view('user.companies.show');
})->middleware(['auth', 'verified'])->name('companies.show');


//employee
Route::get('/dashboard/employee', function () {
    return view('user.employee.index');
})->middleware(['auth', 'verified'])->name('employee');
Route::get('/dashboard/employee/show', function () {
    return view('user.employee.show');
})->middleware(['auth', 'verified'])->name('employee.show');
Route::get('/dashboard/employee/create', function () {
    return view('user.employee.create');
})->middleware(['auth', 'verified'])->name('employee.create');
Route::get('/dashboard/employee/edit', function () {
    return view('user.employee.edit');
})->middleware(['auth', 'verified'])->name('employee.edit');

//sponsored
// Route::get('/dashboard/sponsored', function () {
//     return view('user.sponsored.index');
// })->middleware(['auth', 'verified'])->name('sponsored');
// Route::get('/dashboard/sponsored/show', function () {
//     return view('user.sponsored.show');
// })->middleware(['auth', 'verified'])->name('sponsored.show');
// Route::get('/dashboard/sponsored/create', function () {
//     return view('user.sponsored.create');
// })->middleware(['auth', 'verified'])->name('sponsored.create');
// Route::get('/dashboard/sponsored/edit', function () {
//     return view('user.sponsored.edit');
// })->middleware(['auth', 'verified'])->name('sponsored.edit');

//sponsored
Route::resource('dashboard/sponsore',SponsoreController::class)->middleware(['auth', 'verified']);


