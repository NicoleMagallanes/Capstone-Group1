<?php

use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserInformationController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\OptionGroupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnsplashController;
use App\Http\Controllers\HomeListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'gatekeeper'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('manage')->group(function () {
        Route::resource('/users', UserController::class);
        Route::post('/users/{id}/restore', [UserController::class, 'restore'])->name('users.restore');
        Route::resource('/user_informations', UserInformationController::class);
    });

    Route::resource('/options', OptionController::class);
    Route::resource('/option-groups', OptionGroupController::class);
    Route::resource('/articles', ArticleController::class);
    Route::get('/random-photo', [UnsplashController::class, 'getRandomPhoto']);
    Route::get('image/upload', [ImageUploadController::class, 'fileCreate'])->name('uploadimage');
    Route::post('image/upload/store', [ImageUploadController::class, 'fileStore']);
    Route::post('image/delete', [ImageUploadController::class, 'fileDestroy']);
    Route::get('/home-listing', [HomeListingController::class, 'index'])->name('home-listing.index');
    Route::post('/home-listing/create', [HomeListingController::class, 'create'])->name('home-listing.create');
    
    Route::get('/options-with-groups', [OptionController::class, 'getOptionWithGroups'])->name('options.with.groups');
});



require __DIR__ . '/auth.php';
