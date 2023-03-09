<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\HomeController;

Route::prefix('account')->group(function(){
	Route::get('/create',[HomeController::class,'create'])->name('create.fees');
	Route::post('/create',[HomeController::class,'store'])->name('store.fees');
});