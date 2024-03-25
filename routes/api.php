<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function(){
  Route::get('/home', [Controllers\Api\AuthController::class, 'home']);
  Route::post('/logout', [Controllers\Api\AuthController::class, 'logout']);
});

Route::get('user/{user_id}', [
    Controllers\Api\UserController::class, 'getOne'
]);

Route::get('users', [
    Controllers\Api\UserController::class, 'getAll'
]);

Route::apiResource('catalog', Controllers\Api\CatalogapiController::class);

Route::apiResource('product', Controllers\Api\ProductController::class);

Route::get('products', [Controllers\Api\ProductController::class, 'getIndex']);

Route::apiResource('review', Controllers\Api\PhotoController::class);

Route::apiResource('maintext', Controllers\Api\MaintextController::class);

Route::post('register', [Controllers\Api\AuthController::class, 'register']);

Route::post('login', [Controllers\Api\AuthController::class, 'login']);

Route::post('contact', [Controllers\Api\ContactController::class, 'postIndex']);
