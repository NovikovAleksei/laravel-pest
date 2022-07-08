<?php

use App\Http\Controllers\Api\PropertyController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['as'=>'api.'], function(){
    Route::group(['as'=>'properties.'], function(){
        Route::get('properties', [PropertyController::class, 'index'])->name('index');
        Route::post('properties', [PropertyController::class, 'store'])->name('store');
        Route::put('properties/{property}', [PropertyController::class, 'update'])->name('update');
        Route::delete('properties', [PropertyController::class, 'destroy'])->name('destroy');
    });
});
