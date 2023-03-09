<?php


use App\Http\Controllers\Teacher\Auth\RegisterTeacherController;
use App\Http\Controllers\Teacher\Auth\LoginTeacherController;
use App\Http\Controllers\Teacher\HomeController;

use Illuminate\Support\Facades\Route;

Route::prefix('teacher')->group(function () {
    Route::get('/register', [RegisterTeacherController::class, 'create'])
                ->name('register.teacher');

    Route::post('register', [RegisterTeacherController::class, 'store'])->name('store.teacher');

    // Route::get('login', [LoginTeacherController::class, 'create'])
    //             ->name('login');

    // Route::post('login', [LoginTeacherController::class, 'store'])->name('teacher.login');


    // Route::post('logout', [LoginTeacherController::class, 'destroy'])
    //             ->name('logout');
    Route::get('/all',[HomeController::class,'index'])->name("all.teachers");
    Route::get("profile",[HomeController::class,'profile'])->name('profile-teacher');

    Route::get('myCourses',[HomeController::class,'mycourses'])->name('teacher.courses');
    Route::get('myClasses',[HomeController::class,'myclasses'])->name('teacher.classes');
});
