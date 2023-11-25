<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;

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

// Route::get('/staff', function () {
//     return view('staff.create');
// });

// Route::get('/all_staff', function () {
//     return view('staff.index');
// });

Route::get('/staff/index', [StaffController::class, 'index'])->name('staff.index');

// routes/web.php
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');
