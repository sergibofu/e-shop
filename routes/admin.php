<?php 

/*
Hemos definino este archivo archivo de rutas en Providers/RouteServiceProviders con el
middleware 'web'.
*/


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Use App\Http\Controllers\Admin\DashboardController;
Use App\Http\Controllers\Admin\UserController;


Route::middleware(['auth'])->group(function () {
  Route::prefix('/admin')->group(function(){
    Route::get('/', [DashboardController::class, 'getDashboard'])->middleware('isadmin');
    Route::get('/users', [UserController::class, 'getUsers']);
  });

});

