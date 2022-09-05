<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;

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

Route::group(['middleware' => 'auth'], function(){
Route::get('/', [SalesController::class, 'index']);
Route::post('/', [SalesController::class, 'checkUser']);
Route::get('/regist', [SalesController::class, 'goToRegistPage']);
Route::post('/regist', [SalesController::class, 'registration']);
Route::get('/home', [SalesController::class, 'home']);
Route::post('/select', [SalesController::class, 'select'])->name('select');
Route::post('/edit', [SalesController::class, 'edit'])->name('edit');
Route::post('/add', [SalesController::class, 'add'])->name('add');
Route::post('/search', [SalesController::class, 'search'])->name('search');
Route::get('/setting', [SalesController::class, 'goToSetting']);
Route::post('/setting', [SalesController::class, 'setStatus']);
});

Route::get('/forgot', function(){
    return view('auth.forgot-password');
});

Route::get('/logout', function() {
    Auth::logout();
    return view('/Auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
