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
    return view('welcome');
});

Route::get('/admin', function () {
    return redirect('/K-Employee-Management-System/login');
})->name('login');


Route::get('/admin/register', function () {
    return redirect('/K-Employee-Management-System/register');
})->name('register');


Route::get('/dashboard', function () {
    return redirect('/K-Employee-Management-System');
})->name('dashboard');