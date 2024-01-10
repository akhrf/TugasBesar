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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create.nilai');
Route::post('/simpan', [App\Http\Controllers\HomeController::class, 'simpan'])->name('simpan.nilai');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit.nilai');
Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update.nilai');
Route::get('/delete{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete.nilai');