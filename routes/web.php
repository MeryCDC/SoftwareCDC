<?php

use App\Http\Controllers\DashboardController;
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

Route::resource('/dashboard' , DashboardController::class );
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