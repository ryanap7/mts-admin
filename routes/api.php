<?php

use App\Http\Controllers\API\BrandController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('/brands', BrandController::class);

// Route::get('/brands', [BrandController::class, 'index']);
// Route::get('/brands/{id}', [BrandController::class, 'edit']);
// Route::put('/brands/{id}', [BrandController::class, 'update']);
// Route::delete('/brands/{id}', [BrandController::class, 'destroy']);
