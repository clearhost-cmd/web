<?php

use App\Http\Controllers\App\AuctionController;
use App\Http\Controllers\App\UserController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('my');
});

Route::get('/auctions', [AuctionController::class, 'index'])->name('auctions');
Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/auctions/{id}', [AuctionController::class, 'users']);
Route::get('/users/{id}', [UserController::class, 'auctions']);

require __DIR__.'/auth.php';
