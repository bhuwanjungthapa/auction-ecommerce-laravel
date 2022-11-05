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

// Route::get('/', function () {
//     return view('frontend.home');
// });
Route::get('/',[\App\Http\Controllers\Frontend\HomeController::class,'index'])->name('frontend.home');
Route::get('/vehicle',[\App\Http\Controllers\Frontend\HomeController::class,'vehicle'])->name('frontend.vehicle');
Route::get('/contact',[\App\Http\Controllers\Frontend\HomeController::class,'contact'])->name('frontend.contact');
Route::get('/vehicle/{slug}',[\App\Http\Controllers\Frontend\HomeController::class,'vehicleDetail'])->name('frontend.vehicleDetail');
Route::post('/cart/add',[\App\Http\Controllers\Frontend\HomeController::class,'addToCart'])->name('frontend.cart.add');
Route::get('/cart',[\App\Http\Controllers\Frontend\HomeController::class,'cart'])->name('frontend.cart');
Route::get('/checkout',[\App\Http\Controllers\Frontend\HomeController::class,'checkout'])->name('frontend.checkout');


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




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



//Brand
Route::prefix('backend/brand')->name('backend.brand.')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\BrandController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\BrandController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\BrandController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\BrandController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\BrandController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\BrandController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\BrandController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\BrandController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\BrandController::class,'edit'])->name('edit');
    Route:: put('ag/{id}',[\App\Http\Controllers\backend\BrandController::class,'update'])->name('update');
});




//vehicle_type
Route::prefix('backend/vehicle_type')->name('backend.vehicle_type.')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\VehicleTypeController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\VehicleTypeController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\VehicleTypeController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\VehicleTypeController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\VehicleTypeController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\VehicleTypeController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\VehicleTypeController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\VehicleTypeController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\VehicleTypeController::class,'edit'])->name('edit');
    Route:: put('ag/{id}',[\App\Http\Controllers\backend\VehicleTypeController::class,'update'])->name('update');
});


//vehicle
Route::prefix('backend/vehicle')->name('backend.vehicle.')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\VehicleController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\VehicleController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\VehicleController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\VehicleController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\VehicleController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\VehicleController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\VehicleController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\VehicleController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\VehicleController::class,'edit'])->name('edit');
    Route:: put('update/{id}',[\App\Http\Controllers\backend\VehicleController::class,'update'])->name('update');
});


