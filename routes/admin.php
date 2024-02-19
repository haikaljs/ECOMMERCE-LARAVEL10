<?php 


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ChildCategoryController;
use App\Http\Controllers\Backend\AdminVendorProfileController;
use App\Http\Controllers\Backend\ProductImageGalleryController;

    
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

// ChildCategory routes
Route::put('child-category/change-status', [ ChildCategoryController::class, 'changeStatus'])->name('child-category.change-status');
Route::get('get-subcategories', [ ChildCategoryController::class, 'getSubCategories'])->name('child-category.get-subcategories');
Route::resource('child-category', ChildCategoryController::class);

// Brand routes
Route::put('brand/change-status', [ BrandController::class, 'changeStatus'])->name('brand.change-status');
Route::resource('brand', BrandController::class);

// vendoor profile routes
Route::resource('vendor-profile', AdminVendorProfileController::class);

// Product routes
Route::get('product/get-subcategories', [ProductController::class, 'getSubCategories'])->name('product.get-subcategories');
Route::get('product/get-child-categories', [ProductController::class, 'getChildCategories'])->name('product.get-child-categories');
Route::resource('products', ProductController::class);

Route::resource('products-image-gallery', ProductImageGalleryController::class);




?>