<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhpArtisanController;


Auth::routes();

Route::get('/', [DashboardController::class, 'index'])->name('home')->middleware('auth:admin');
Route::get('/migrate-freshseed', [PhpArtisanController::class, 'migrateFreshSeed']);

Route::group(['middleware' => ['auth']], function () {
    // User Dashboard Route
    Route::get('user/profile', [UserProfileController::class, 'edit'])->name('user.profile');
    Route::put('user/profile/update', [UserProfileController::class, 'update'])->name('user.update.profile');
    Route::put('user/profile/update/password', [UserProfileController::class, 'changePassword'])->name('user.update.profile.password');
});


// For Admin
require __DIR__ . '/admin.php';
