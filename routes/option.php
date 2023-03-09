<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Option\HomeController;

Route::prefix('option')->group(function(){
	Route::get('/all',[HomeController::class,'index'])->name('options');
	Route::get('/option',[HomeController::class,'create'])->name('create-option');
	Route::post('/option',[HomeController::class,'store'])->name('store-option');
});