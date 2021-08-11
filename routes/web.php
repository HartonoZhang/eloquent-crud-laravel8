<?php

use App\Http\Controllers\ItemController;
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
    return view('welcome');
});

Route::get('/add', [ItemController::class, 'addItem']);

Route::post('/create-item', [ItemController::class, 'createItem'])->name('item.create');

Route::get('/show', [ItemController::class, 'showItem']);

Route::get('/edit/{id}', [ItemController::class, 'editItem']);

Route::get('/detail/{id}', [ItemController::class, 'detailItem']);

Route::post('/update-item', [ItemController::class, 'updateItem'])->name('item.update');

Route::get('/delete-item/{id}', [ItemController::class, 'deleteItem']);