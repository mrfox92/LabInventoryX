<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommuneController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Seller\ServiceController as SellerServiceController;
use App\Http\Livewire\Admin\ShowCategory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
    
    Route::resource('/users', UserController::class)->names('admin.users');
    Route::put('/users/{user}', [UserController::class, 'restart'])->name('admin.users.restart');

    Route::resource('/categories', CategoryController::class)->names('admin.categories');
    Route::get('categories/{category}', ShowCategory::class)->name('admin.categories.show');


    Route::resource('/services', ServiceController::class)->names('admin.services');
    
});

