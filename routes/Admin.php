<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

Route::prefix('admin')->group(function(){

		Route::get('/home',[HomeController::class,'index'])->name('admin.index');
});