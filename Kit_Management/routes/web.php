<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [FormController::class, 'create'])
    ->middleware(['auth', 'verified', 'kitandjersey'])
    ->name('dashboard'); // Show the form on the dashboard

Route::post('/form', [FormController::class, 'store'])
    ->middleware(['auth', 'verified', 'kitandjersey'])
    ->name('form.store'); // Submit the form data

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth','role:President,Vice_President_Treasurer_Kit_Manager'])->group(function () {
    Route::get('/committee/dashboard',[App\Http\Controllers\CommitteeController::class,'dashboard'])->name('committee.dashboard');
});

require __DIR__.'/auth.php';

