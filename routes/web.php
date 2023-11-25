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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/all_staff', function () {
//     return view('staff.index');
// });


// // routes/web.php
// Route::get('/staff/index', [StaffController::class, 'index'])->name('staff.index');
// Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
// Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/staff', StaffController::class);