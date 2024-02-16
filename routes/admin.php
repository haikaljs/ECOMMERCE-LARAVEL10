<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
    
// Admin routes
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// Profile routes
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');

// Slider routes
Route::resource('slider', SliderController::class);

// Category routes
Route::put('change-status', [ CategoryController::class, 'changeStatus'])->name('category.change-status');
Route::resource('category', CategoryController::class);

// SubCategory routes
Route::put('subcategory/change-status', [ SubCategoryController::class, 'changeStatus'])->name('subcategory.change-status');
Route::resource('subcategory', SubCategoryController::class);
?>