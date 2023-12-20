<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaterialRequestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockInController;
use App\Http\Controllers\StockOutController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
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

Route::get('/', fn () => redirect('/dashboard'))
    ->name('home');

Route::resource('/users', UserController::class)
    ->except(['create', 'show', 'edit'])
    ->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('autenticate');

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::resource('/products', ProductController::class)
    ->except(['create', 'show', 'edit'])
    ->middleware('auth');

Route::resource('/categories', CategoryController::class)
    ->except(['create', 'show', 'edit'])
    ->middleware('auth');

Route::resource('/units', UnitController::class)
    ->except(['create', 'show', 'edit'])
    ->middleware('auth');

Route::resource('/suppliers', SupplierController::class)
    ->except(['create', 'show', 'edit'])
    ->middleware('auth');

Route::resource('/customers', CustomerController::class)
    ->except(['create', 'show', 'edit'])
    ->middleware('auth');

Route::resource('/stockins', StockInController::class)
    ->only(['index', 'store', 'destroy'])
    ->middleware('auth');

Route::resource('/stockouts', StockOutController::class)
    ->only(['index', 'store', 'destroy'])
    ->middleware('auth');

Route::resource('/materialrequests', MaterialRequestController::class)
    ->only(['index', 'store', 'destroy'])
    ->middleware('auth');

Route::resource('/invoices', InvoiceController::class)
    ->only(['index', 'store', 'update'])
    ->middleware('auth');
