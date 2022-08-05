<?php

use App\Http\Controllers\DashboardSeminarController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [SeminarController::class, 'index']);
// single seminar
Route::get('/seminars/{seminar:slug}', [SeminarController::class, 'show']);


Route::get('about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Sahal Fajri',
        'image' => 'sahalpp.jpeg'
    ]);
});

Route::get('contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'email' => 'sahalfajri879@gmail.com',
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/seminars/checkSlug', [DashboardSeminarController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/seminars', DashboardSeminarController::class)->middleware('auth');
