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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::middleware('can:isAdmin')->prefix('admin')->group(function ()
{

    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/order/update/{order}/{status}', [App\Http\Controllers\OrderController::class, 'update'])->name('admin.order.update');

});

Route::middleware(['auth', 'can:isSubscriber'])->prefix('profile')->group(function ()
{

    Route::get('/', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::post('/order', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');

});
