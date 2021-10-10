<?php

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

Route::group(['middleware'=>'web'],function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('usuarios',[App\Http\Controllers\UsuariosController::class, 'index'])->middleware('auth');
Route::get('new',[App\Http\Controllers\UsuariosController::class, 'new'])->middleware('auth');
Route::post('add',[App\Http\Controllers\UsuariosController::class, 'add'])->middleware('auth');
Route::get('{id}/edit',[App\Http\Controllers\UsuariosController::class, 'edit'])->middleware('auth');
Route::post('{id}/update',[App\Http\Controllers\UsuariosController::class, 'update'])->middleware('auth');
Route::delete('{id}/remove',[App\Http\Controllers\UsuariosController::class, 'remove'])->middleware('auth');
