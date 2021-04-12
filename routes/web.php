<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InventoryController;
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

// Route::get('/products [ProductController::class, 'getJSON');

//product
Route::get('product', [ProductController::class,'index']);
Route::get('product/{product}', [ProductController::class,'show']);
Route::post('product', [ProductController::class,'store']);
Route::put('product/{product}', [ProductController::class,'update']);
Route::delete('product/{product}', [ProductController::class,'destroy']);

 //inventory  
Route::get('/inventory', [InventoryController::class,'index']);
Route::get('inventory/{inventory}', [InventoryController::class,'show']);
Route::post('inventory', [InventoryController::class,'store']);
Route::put('inventory/{inventory}', [InventoryController::class,'update']);
Route::delete('inventory/{inventory}', [InventoryController::class,'destroy']);



