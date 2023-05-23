<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BestellingController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', [BestellingController::class, 'welcome'])->name('welcome');

Route::resource('/', BestellingController::class);

Route::post('/join', [BestellingController::class, 'join'])->name('join');
Route::post('/total', [BestellingController::class, 'total'])->name('total');
Route::post('/average', [BestellingController::class, 'average'])->name('average');
Route::post('/popular', [BestellingController::class, 'popular'])->name('popular');
