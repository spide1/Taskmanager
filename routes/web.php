<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashbordController;

Route::prefix('admin')->group(function(){
    Route::get('dashboard', [DashbordController::class, 'index'])->name('admin.dashboard'); 
});