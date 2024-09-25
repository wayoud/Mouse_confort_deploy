<?php

use App\Http\Controllers\AceptedController;
use App\Http\Controllers\canceledController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\pendingController;
use App\Http\Controllers\TraiterController;
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
Route::post('/orders/{id}/traiteAccepted', [OrderController::class, 'updateStatusToTraiteAcepted'])->name('orders.traiteAccepted');
Route::post('/orders/{id}/canceled', [OrderController::class, 'updateStatusToCanceled'])->name('orders.canceled');

// sidebar routes
Route::get('/acepted', [AceptedController::class, 'index'])->name('acepted')->middleware('auth');
Route::get('/traité', [TraiterController::class, 'index'])->name('traiter')->middleware('auth');
Route::get('/annuler', [canceledController::class, 'index'])->name('annuler')->middleware('auth');
Route::get('/encours', [pendingController::class, 'index'])->name('pending')->middleware('auth');
