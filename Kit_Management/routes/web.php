<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KitController;
use App\Http\Controllers\ManagementController;


Route::get('/', function () {
    return view('welcome');
});

// routes\web.php



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [FormController::class, 'create'])->name('dashboard'); // Show the form on the dashboard
    Route::post('/form', [FormController::class, 'store'])->name('form.store'); // Submit the form data
    // Existing routes...
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/kit_list', [App\Http\Controllers\KitController::class, 'index'])->name('admin.kit_list');
    Route::get('/admin/forms', [App\Http\Controllers\FormController::class, 'index'])->name('admin.forms');
    Route::get('/admin/allocations', [App\Http\Controllers\AllocationController::class, 'index'])->name('admin.allocations');
    Route::get('/admin/management', [App\Http\Controllers\ManagementController::class, 'index'])->name('admin.management');
    // Routes for handling Kit operations
Route::post('/kits', [ManagementController::class, 'addKit']);
Route::put('/kits/{id}', [ManagementController::class, 'updateKit']);
Route::delete('/kits/{id}', [ManagementController::class, 'deleteKit']);

// Routes for handling Jersey operations
Route::post('/jerseys', [ManagementController::class, 'addJersey']);
Route::put('/jerseys/{id}', [ManagementController::class, 'updateJersey']);
Route::delete('/jerseys/{id}', [ManagementController::class, 'deleteJersey']);
    
});

Route::middleware(['auth','role:President,Vice_President_Treasurer_Kit_Manager'])->group(function () {
    Route::get('/committee/dashboard',[App\Http\Controllers\CommitteeController::class,'dashboard'])->name('committee.dashboard');
});

require __DIR__.'/auth.php';


