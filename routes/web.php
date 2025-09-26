<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Data User Routes dengan CRUD
Route::get('/data-user', [UserController::class, 'index'])->name('dataUser');
Route::get('/user/create', [UserController::class, 'create'])->name('createUser');
Route::post('/user/store', [UserController::class, 'store'])->name('storeUser');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('editUser');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('updateUser');
Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('deleteUser');

// Data Product Routes dengan CRUD
Route::get('/data-product', [ProductController::class, 'index'])->name('dataProduct');
Route::get('/data-product/create', [ProductController::class, 'create'])->name('createProduct');
Route::post('/product/store', [ProductController::class, 'store'])->name('storeProduct');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('editProduct');
Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('updateProduct');
Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('deleteProduct');

Route::get('/pesanan', function () {
    return view('pesanan');
})->name('pesanan');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
