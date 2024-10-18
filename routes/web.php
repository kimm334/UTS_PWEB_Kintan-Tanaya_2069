<?php

use App\Http\Controllers\DashboardLoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/NewFile', function () {
    return view('NewFile/Dashboard');
});

Route::get('/Contact', function() {
    return view('NewFile/Contact');
});

Route::get('/register', function() {
    return view('NewFile/register');
});

Route::get('NewFile/Dashboard', action: [DashboardLoginController::class, 'index']);
Route::get('/Contact', [DashboardLoginController::class, 'contacts'])->name('NewFile.Contact');
Route::get('/register', [DashboardLoginController::class, 'regis'])->name('NewFile.register');

Route::get('/coba', function() {
    return view('NewFile/coba');
});