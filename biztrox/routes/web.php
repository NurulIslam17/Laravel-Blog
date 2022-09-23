<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\BlogCategoryController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    //category....................................

    Route::get('/add-category',[BlogCategoryController::class,'addCategory'])->name('add.category');
    Route::get('/manage-category',[BlogCategoryController::class,'manageCategory'])->name('manage.category');
});
