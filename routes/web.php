<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommuneController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Seller\SellerController;
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
    
    Route::resource('/subcategories', SubcategoryController::class)->names('admin.subcategories');

    Route::resource('/services', ServiceController::class)->names('admin.services');

    Route::resource('/communes', CommuneController::class)->names('admin.communes');
    
});

//  Seller

Route::group(['prefix' => 'seller'], function () {
    Route::get('/home', [SellerController::class, 'home'])->name('admin.home');

    // Route::get('/services',         [SellerController::class, 'services'])->name('seller.services');
    Route::get('/analytics',        [SellerController::class, 'analytics'])->name('seller.analytics');
    Route::get('/chats',            [SellerController::class, 'chats'])->name('seller.chats');
    Route::get('/contacts',         [SellerController::class, 'contacts'])->name('seller.contacts');
    Route::get('/wishlist',         [SellerController::class, 'wishlist'])->name('seller.wishlist');
    Route::get('/profile/{user}',   [SellerController::class, 'profile'])->name('seller.profile');
    Route::post('/services/{slug}', [SellerController::class, 'show'])->name('seller.show');

    //  Services
    Route::resource('/services', SellerServiceController::class)->names('seller.services');

});
