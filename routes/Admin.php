<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

Route::middleware('auth','admin')->prefix('admin')->group(function(){

		Route::get('/home',[HomeController::class,'index'])->name('admin.index');
});