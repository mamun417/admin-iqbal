<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return redirect()->route('admin.login');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])
        ->name('password.request');

    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])
        ->name('password.email');

    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])
        ->name('password.reset');

    Route::post('password/reset', [ResetPasswordController::class, 'reset'])
        ->name('password.update');
});

Route::group(['middleware' => ['auth:admin'], 'as' => 'admin.', 'prefix' => 'admin'], function () {

    // dashboard v_2
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /*************Admin Profile Update*************/
    Route::get('/profile', [AdminController::class, 'index'])->name('profile');
    Route::PATCH('/profile/{admin}/update', [AdminController::class, 'update'])->name('profile.update');

    /*************Admin Password Update*************/
    Route::PATCH('/password/change', [AdminController::class, 'changePassword'])->name('password.change');

    /************* Staff Routes *************/
    Route::middleware(['adminRoute'])->group(function () {
        Route::resource('/staffs', StaffController::class)->except(['show']);
    });

    /************* Agent Routes *************/
    Route::resource('/agents', AgentController::class);

    /************* Client Routes *************/
    Route::resource('/clients', ClientController::class);
});
