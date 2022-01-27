<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuiasController;
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

Route::get('/home', [DashboardController::class, 'index'])->middleware('auth')->name('home');

Route::group(['middleware' => 'auth'], function () 
{
    Route::get('/', [DashboardController::class , 'index'])->name('home');
});  

/* ----------------------------------------------------------------------------------------------------- */
Route::get('/envio', [GuiasController::class, 'index'])->name('envio.index')->middleware('auth');

Route::resource('/dashboard' , DashboardController::class )->middleware('auth');

/* Route::resource('/envio' ,GuiasController::class)->middleware('auth'); */

/* ----------------------------------------------------------------------------------------------------- */

/* Auth::routes();

Route::get('/home', [EntradasImportacionController::class, 'index'])->middleware('auth')->name('home');

Route::group(['middleware' => 'auth'], function () 
{
    Route::get('/', [EntradasImportacionController::class , 'index'])->name('home');
});  


Route::get('/', function () {
    return view('welcome');
}); */