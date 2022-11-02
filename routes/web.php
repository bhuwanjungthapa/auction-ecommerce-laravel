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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//Auction
Route::prefix('backend/auction')->name('backend.auction.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\AuctionsController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\AuctionsController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\AuctionsController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\AuctionsController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\AuctionsController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\AuctionsController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\AuctionsController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\AuctionsController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\AuctionsController::class,'edit'])->name('edit');
    Route:: put('/{id}',[\App\Http\Controllers\backend\AuctionsController::class,'update'])->name('update');
});
