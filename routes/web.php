<?php

use App\Models\Outlaw;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutlawController;

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

// R del CRUD
Route::get('/',[OutlawController::class, 'index'])->name('home');
Route::get('/home',[OutlawController::class, 'index']);

//D del CRUD
Route::delete('/delete/{id}', [OutlawController::class, 'destroy'])->name('deleteOutlaw');

//C del CRUD
Route::get('/create', [OutlawController::class, 'create'])->name('createOutlaw');
Route::post('/', [OutlawController::class, 'store'])->name('storeOutlaw');

//U del CRUD
Route::get('/edit/{id}', [OutlawController::class, 'edit'])->name('editOutlaw');
Route::patch('/outlaw/{id}', [OutlawController::class, 'update'])->name('updateOutlaw');

//Show
Route::get('/show/{id}', [OutlawController::class,'show'])->name('showOutlaw');