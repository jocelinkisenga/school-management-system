<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Classe\HomeController;

Route::prefix('classe')->group(function(){
	Route::get('/cl',[HomeController::class,'create'])->name('create-classe');
	Route::post('/cl',[HomeController::class,'store'])->name('store-classe');
});