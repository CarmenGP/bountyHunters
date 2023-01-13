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
Route::delete('/delete/{id}', [OutlawController::class, 'destroy'])->name('deleteOutlaw')->middleware('isadmin', 'auth');

//C del CRUD
Route::get('/create', [OutlawController::class, 'create'])->name('createOutlaw')->middleware('isadmin', 'auth');
Route::post('/', [OutlawController::class, 'store'])->name('storeOutlaw')->middleware('isadmin', 'auth');

//U del CRUD
Route::get('/edit/{id}', [OutlawController::class, 'edit'])->name('editOutlaw')->middleware('isadmin', 'auth');
Route::patch('/outlaw/{id}', [OutlawController::class, 'update'])->name('updateOutlaw')->middleware('isadmin', 'auth');

//Show
Route::get('/show/{id}', [OutlawController::class,'show'])->name('showOutlaw');


//Join and Leave
Route::get('/join/{id}', [OutlawController::class,'join'])->name('join')->middleware('auth');
Route::get('/leave/{id}', [OutlawController::class,'leave'])->name('leave')->middleware('auth');
