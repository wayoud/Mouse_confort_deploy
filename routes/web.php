<?php

use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/order/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/order', [OrderController::class, 'store'])->name('orders.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Routes to update status
Route::post('/orders/{id}/traite', [OrderController::class, 'updateStatusToTraite'])->name('orders.traite');
Route::post('/orders/{id}/canceled', [OrderController::class, 'updateStatusToCanceled'])->name('orders.canceled');
