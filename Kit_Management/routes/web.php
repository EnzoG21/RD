<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KitController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\AllocationController;
use App\Http\Controllers\PanelController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [FormController::class, 'create'])->name('dashboard');
    Route::post('/form', [FormController::class, 'store'])->name('store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/kit_list', [KitController::class, 'index'])->name('admin.kit_list');
    Route::get('/admin/forms', [App\Http\Controllers\FormController::class, 'index'])->name('admin.forms');
    Route::get('/admin/allocations', [AllocationController::class, 'index'])->name('admin.allocations');
    Route::post('/allocate-kit', [ManagementController::class, 'allocateKit'])->name('management.allocateKit');
    Route::get('/admin/management', [ManagementController::class, 'index'])->name('admin.management');
    Route::post('/admin/management/storeKit', [ManagementController::class, 'storeKit'])->name('management.storeKit');
    Route::post('/admin/management/updateKit', [ManagementController::class, 'updateKit'])->name('management.updateKit');
    Route::post('/admin/management/deleteKit', [ManagementController::class, 'deleteKit'])->name('management.deleteKit');
    
    Route::post('/admin/management/storeJersey', [ManagementController::class, 'storeJersey'])->name('management.storeJersey');
    Route::post('/admin/management/updateJersey', [ManagementController::class, 'updateJersey'])->name('management.updateJersey');
    Route::post('/admin/management/deleteJersey', [ManagementController::class, 'deleteJersey'])->name('management.deleteJersey');

    Route::get('/admin/panel', [PanelController::class, 'index'])->name('admin.panel');
    Route::post('/admin/panel/kit-check', [PanelController::class, 'store'])->name('admin.panel.kit-check.store');
    Route::post('/admin/panel/invoice/store', [PanelController::class, 'storeInvoice'])->name('admin.panel.invoice.store');
    Route::post('/admin/panel/order/store', [PanelController::class, 'storeOrder'])->name('admin.panel.order.store');
    Route::post('/admin/panel/order/update', [PanelController::class, 'updateOrderStatus'])->name('admin.panel.order.update');
});
/*
Route::middleware(['auth','role:President,Vice_President_Treasurer_Kit_Manager'])->group(function () {
    Route::get('/committee/dashboard',[App\Http\Controllers\CommitteeController::class,'dashboard'])->name('committee.dashboard');
    Route::get('/committee/kit_list', [KitController::class, 'index'])->name('committee.kit_list');
    Route::get('/committee/forms', [App\Http\Controllers\FormController::class, 'index'])->name('committee.forms');
    Route::get('/committee/allocations', [AllocationController::class, 'index'])->name('admin.allocations');
    Route::post('/allocate-kit', [ManagementController::class, 'allocateKit'])->name('committee.allocateKit');
    Route::get('/committee/management', [ManagementController::class, 'index'])->name('committee.management');
    Route::post('/committee/management/storeKit', [ManagementController::class, 'storeKit'])->name('management.storeKit');
    Route::post('/committee/management/updateKit', [ManagementController::class, 'updateKit'])->name('management.updateKit');
    Route::post('/committee/management/deleteKit', [ManagementController::class, 'deleteKit'])->name('management.deleteKit');
    
    Route::post('/committee/management/storeJersey', [ManagementController::class, 'storeJersey'])->name('management.storeJersey');
    Route::post('/committee/management/updateJersey', [ManagementController::class, 'updateJersey'])->name('management.updateJersey');
    Route::post('/committee/management/deleteJersey', [ManagementController::class, 'deleteJersey'])->name('management.deleteJersey');

    Route::get('/committee/panel', [PanelController::class, 'index'])->name('admin.panel');
    Route::post('/committee/panel/kit-check', [PanelController::class, 'store'])->name('committee.panel.kit-check.store');
    Route::post('/committee/panel/invoice/store', [PanelController::class, 'storeInvoice'])->name('committee.panel.invoice.store');
    Route::post('/committee/panel/order/store', [PanelController::class, 'storeOrder'])->name('committee.panel.order.store');
    Route::post('/committee/panel/order/update', [PanelController::class, 'updateOrderStatus'])->name('committee.panel.order.update');
});
*/

require __DIR__.'/auth.php';


