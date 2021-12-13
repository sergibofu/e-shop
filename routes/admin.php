<?php 

/*
Hemos definino este archivo archivo de rutas en Providers/RouteServiceProviders con el
middleware 'web'.
*/


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Use App\Http\Controllers\Admin\DashboardController;
Use App\Http\Controllers\Admin\UserController;
Use App\Http\Controllers\Admin\ProductController;
Use App\Http\Controllers\Admin\CategoriesController;




Route::middleware(['auth'])->group(function () {
  Route::prefix('/admin')->group(function(){
    Route::get('/', [DashboardController::class, 'getDashboard'])->middleware('isadmin');
    Route::get('/users', [UserController::class, 'getUsers'])->middleware('isadmin');
    Route::get('/products', [ProductController::class, 'getHome'])->middleware('isadmin');
    Route::get('/product/add', [ProductController::class, 'getProductAdd'])->middleware('isadmin');
    Route::post('/product/add', [ProductController::class, 'addProduct'])->middleware('isadmin');
    Route::get('/categories/{module}', [CategoriesController::class, 'getCategories'])->middleware('isadmin');

    Route::get('/category/{id}/edit', [CategoriesController::class, 'getCategoryEdit'])->middleware('isadmin');
    Route::post('/category/{id}/edit', [CategoriesController::class, 'postCategoryEdit'])->middleware('isadmin');

    Route::get('/category/{id}/delete', [CategoriesController::class, 'getCategoryDelete'])->middleware('isadmin');

    Route::post('/category/add', [CategoriesController::class, 'postCategoryAdd'])->middleware('isadmin');

  });

});

