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

Route::get('/comics', function () {
    $comics = config('comics-db');
    return view('comics.index', compact('comics'));
})->name('comics.index');

Route::get('/comic/{id}', function ($id) {
    abort_unless($id >= 0 && $id < count(config('comics-db')), 404);
    $comic = config('comics-db')[$id];
    return view('comics.show', compact('comic'));
})->name('comics.show');
