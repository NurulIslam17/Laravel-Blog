<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogSubCategoryController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    //category.......................................................................................................................

    Route::get('/add-category',[BlogCategoryController::class,'addCategory'])->name('add.category');
    Route::post('/new.category',[BlogCategoryController::class,'newNategory'])->name('new.category');
    Route::get('/manage-category',[BlogCategoryController::class,'manageCategory'])->name('manage.category');
    Route::get('/edit-category/{id}',[BlogCategoryController::class,'editCategory'])->name('edit.category');
    Route::post('/update.category/{id}',[BlogCategoryController::class,'updateCategory'])->name('update.category');
    Route::get('/delete-category/{id}',[BlogCategoryController::class,'deleteCategory'])->name('delete.category');

    //sub category.......................................................................................................................
    Route::resource('blog-sub-categories',BlogSubCategoryController::class);
    // Blog Routes
    Route::resource('blogs',BlogController::class);


});
