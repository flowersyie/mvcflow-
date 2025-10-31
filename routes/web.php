<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Transaction;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\NameController;
use App\Http\Controllers\TransactionController;

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

Route::resource(name: 'Category', controller: CategoryController::class);
Route::resource(name: 'Item', controller: ItemController::class);
Route::resource(name: 'Transaction', controller: TransactionController::class);