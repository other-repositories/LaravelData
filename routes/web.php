<?php

use Illuminate\Support\Facades\Route;

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



use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ShopResource;
use App\Models\Shop;
use App\Models\Product;

Route::get('/', [ProductController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/add', [ProductController::class, 'add']);
Route::get('/product/{product}', [ProductController::class, 'view']);
Route::get('/product/{product}/delete', [ProductController::class, 'drop']);
Route::get('/product/{product}/edit', [ProductController::class, 'edit']);
Route::post('/product/{product}/edit', [ProductController::class, 'store']);
Route::post('/product/add', [ProductController::class, 'store']);
Route::get('/api/products', function() { return ProductResource::collection(Product::all()->load("shop")); });


Route::get('/shops', [ShopController::class, 'index']);
Route::get('/shop/add', [ShopController::class, 'add']);
Route::get('/shop/{shop}', [ShopController::class, 'view']);
Route::get('/shop/{shop}/delete', [ShopController::class, 'drop']);
Route::get('/shop/{shop}/edit', [ShopController::class, 'edit']);
Route::post('/shop/{shop}/edit', [ShopController::class, 'store']);
Route::post('/shop/add', [ShopController::class, 'store']);
Route::get('/api/shops', function() { return ShopResource::collection(Shop::all()); });

