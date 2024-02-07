<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

Route::get('/', [ComicController::class, 'index'])->name('guest.comic.index');
Route::post('/comics', [ComicController::class, 'store'])->name('guest.comic.store');
Route::get('/comics/create', [ComicController::class, 'create'])->name('guest.comic.create');
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('guest.comic.show');
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('guest.comic.update');
Route::get('/comics/{id}/edit', [ComicController::class, 'edit'])->name('guest.comic.edit');

