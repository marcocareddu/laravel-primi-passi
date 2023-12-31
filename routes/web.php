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

Route::get('/', function () {
    $welcome = 'Benvenuti in Laravel';

    return view('home', compact('welcome'));
})->name('home');

Route::get('/second/second', function () {
    $welcome = 'Benvenuti nella seconda pagina';

    return view('second.second', compact('welcome'));
})->name('second');
