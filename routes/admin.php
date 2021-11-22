<?php 

/*
Hemos definino este archivo archivo de rutas en Providers/RouteServiceProviders con el
middleware 'web'.
*/


use Illuminate\Support\Facades\Route;


Route::get('/admin', function(){
    return "Hi admin";
})->middleware('isadmin');



