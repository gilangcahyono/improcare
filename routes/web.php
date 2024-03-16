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

Route::get('/', fn () => to_route('dashboard'))->name('home');

Route::middleware('auth')->group(function () {
    Route::resources(
        [
            'users' => UserController::class,
            'categories' => CategoryController::class,
            'units' => UnitController::class,
            'suppliers' => SupplierController::class,
            'customers' => CustomerController::class,
        ],
        ['except' => ['create', 'show', 'edit']]
    );
    Route::resources(
        [
            'stockins' => StockInController::class,
            'stockouts' => StockOutController::class,
            'materialrequests' => MaterialRequestController::class,
        ],
        ['only' => ['index', 'store', 'destroy']]
    );
    Route::resource('/invoices', InvoiceController::class)->except(['index', 'create', 'edit']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/products', ProductController::class)->except(['create', 'edit']);
    Route::get('/printproduct', [ProductController::class, 'print'])->name('products.print');
    Route::get('/printstokcouts/{name}', [StockOutController::class, 'print'])->name('stockouts.print');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login',  'index')->name('login')->middleware('guest');
    Route::post('/login',  'authenticate')->middleware('guest');
    Route::delete('/logout',  'logout')->name('logout')->middleware('auth');
});
