<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/services', [\App\Http\Controllers\MainController::class, 'services'])->name('services');
Route::get('/news', [\App\Http\Controllers\MainController::class, 'news'])->name('news');
Route::get('/reviews', [\App\Http\Controllers\MainController::class, 'reviews'])->name('reviews');
Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');

Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');

Route::group([
    'middleware' => \App\Http\Middleware\AdministratorControl::class,
], function () {
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');
});
