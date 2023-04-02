<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
 
 



 
  
 
 
  Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware'=>'auth'], function()
{
	Route::prefix('dashboard')->name('dashboard.')->group(function(){

    Route::get('index',[DashboardController::class,'index'])->name('index') ;

    Route::resource('users',UserController::class)->except('show') ;

  }) ;

  // User Routes 


	 
});

 










?>