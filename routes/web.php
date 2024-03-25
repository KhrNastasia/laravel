<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout', [Controllers\UserController::class, 'Logout']);

require __DIR__.'/auth.php';

Route::middleware('lang')->group(function(){
    Route::get('/', [Controllers\BaseController::class, 'getIndex']);

    Route::get('/catalog', [Controllers\CatalogController::class, 'getIndex']);
    Route::get('/example', [Controllers\CatalogController::class, 'example']);
    Route::get('/catalog/{catalog}', [Controllers\CatalogController::class, 'getOne']);

    Route::get('/account/{user?}', [ProfileController::class, 'account']);

    Route::get('/photo', [Controllers\PhotoController::class, 'getIndex']);

    Route::post('/review', [Controllers\PhotoController::class, 'postData']);
    // Route::get('/review', [Controllers\PhotoController::class, 'getData']);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    //всегда в конце
    Route::get('{url}',[Controllers\MaintextController::class, 'getUrl']);
});
