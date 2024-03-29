<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodDonationController;
use App\Http\Controllers\BloodRequestController;
use App\Http\Controllers\DashboardController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
    
    Route::resource('blood-donations', BloodDonationController::class);
    Route::get('/blook-donations/{blood_type}',[BloodDonationController::class,'getDonationByBloodType'])->name('blood_donations.blood_type');
    
    Route::resource('blood-requests', BloodRequestController::class);
});
