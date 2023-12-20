<?php

use App\Models\product;
use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

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
    return view('index',[
        'categories' => category::all(),
        'products' => product::all()
    ]);
});
Route::get('/signup', [AuthController::class, 'index']);
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->middleware('auth');
Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
Route::post('/signup/save', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/review', [ProductController::class, 'review'])->middleware('auth');
