<?php

use App\Http\Controllers\AffectationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subject\HomeController;

Route::prefix('course')->group(function(){
	Route::get('/courses',[HomeController::class,'index'])->name('courses');
	Route::get('/create',[HomeController::class,'create'])->name('create.course');
	Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit.course');
	Route::post('/course',[HomeController::class,'store'])->name('store.course');
	Route::post('/affect',[AffectationController::class,'store'])->name('affect-course');

});