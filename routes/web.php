<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::post('publish/{id}', [HomeController::class, 'publish'])->name('publish');
    Route::post('unpublish/{id}', [HomeController::class, 'unpublish'])->name('unpublish');    
});

Route::prefix('post')->group(function () {
    Route::post('/', [PostController::class, 'store'])->name('post.store');
    Route::get('/{id}/show', [PostController::class, 'show'])->name('post.show');
    Route::put('/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('post.destroy');
});
