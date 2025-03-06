<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeServiceController;
use App\Http\Controllers\Admin\HoneyController;
use App\Http\Controllers\Admin\HouseListingController;
use App\Http\Controllers\Admin\LogisticsController;
use App\Http\Controllers\Admin\ServiceAgentController;
use Illuminate\Support\Facades\Route;

Route::get('testadmin', function () {
    return view('admin.homeservice');
});

//Admin Login
Route::get('admin/login', [AuthController::class, 'index'])->name('admin.login');
Route::get('admin', [AuthController::class, 'index'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login.store');

Route::get('admin/homeservice', [HomeServiceController::class, 'index'])->name('admin.homeservice');
Route::post('admin/homeservice', [HomeServiceController::class, 'homeupdate'])->name('admin.homeservice.update');

Route::get('admin/logistics', [LogisticsController::class, 'index'])->name('admin.logistics');
Route::get('admin/logistics/{id}/{status}', [LogisticsController::class, 'updatestatus'])->name('admin.logistics.update.status');
Route::post('admin/logistics', [LogisticsController::class, 'homeupdate'])->name('admin.logistics.update');


Route::get('admin/honey', [HoneyController::class, 'index'])->name('admin.honey');
Route::get('admin/honey/{id}/{status}', [HoneyController::class, 'updatestatus'])->name('admin.honey.update.status');

Route::get('admin/serviceagent', [ServiceAgentController::class, 'index'])->name('admin.serviceagent');

Route::get('admin/houselisting', [HouseListingController::class, 'index'])->name('admin.houselisting');
Route::get('admin/houselisting/{id}/approve', [HouseListingController::class, 'updatestatus'])->name('admin.houselisting.approve');
