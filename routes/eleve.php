<?php

use App\Http\Controllers\Eleve\Auth\RegisterEleveController;
use App\Http\Controllers\Eleve\Auth\LoginEleveController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Eleve\HomeController;


Route::prefix('eleve')->group(function () {
    Route::get('/all',[HomeController::class,'index'])->name('all.eleves');
     Route::get('/eleve/{id}',[HomeController::class,'show'])->name('show.eleve');

    Route::get('register', [RegisterEleveController::class, 'create'])
                ->name('register.eleve');

    Route::post('register', [RegisterEleveController::class, 'store'])->name('register.eleve');

    Route::get('login', [LoginEleveController::class, 'create'])
                ->name('login');

    Route::post('login', [LoginEleveController::class, 'store'])->name('eleve.login');
    Route::get('profile', [HomeController::class, 'profile'])->name('eleve.profile');

    Route::post('logout', [LoginEleveController::class, 'destroy'])
                ->name('logout');
});

