<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin routes
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.dashboard');
});


//agent routes
Route::middleware(['auth','role:President,Vice_President_Treasurer_Kit_Manager'])->group(function () {
    Route::get('/committee/dashboard',[App\Http\Controllers\CommitteeController::class,'dashboard'])->name('committee.dashboard');
});

require __DIR__.'/auth.php';
