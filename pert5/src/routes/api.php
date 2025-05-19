<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// use product
use App\Filament\Admin\Resources\ProductResource\Api\Handlers\CreateHandler as ProductCreateHandler;
use App\Filament\Admin\Resources\ProductResource\Api\Handlers\PaginationHandler as ProductPaginationHandler;
use App\Filament\Admin\Resources\ProductResource\Api\Handlers\DetailHandler as ProductDetailHandler;
use App\Filament\Admin\Resources\ProductResource\Api\Handlers\UpdateHandler as ProductUpdateHandler;
use App\Filament\Admin\Resources\ProductResource\Api\Handlers\DeleteHandler as ProductDeleteHandler;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')->group(function () {
    // Protected route
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Group untuk products API
    Route::prefix('products')->group(function () {
        Route::post('/', [ProductCreateHandler::class, 'handler'])->name('api.products.create');
        Route::get('/', [ProductPaginationHandler::class, 'handler'])->name('api.products.pagination');
        Route::get('/{id}', [ProductDetailHandler::class, 'handler'])->name('api.products.detail');
        Route::put('/{id}', [ProductUpdateHandler::class, 'handler'])->name('api.products.update');
        Route::delete('/{id}', [ProductDeleteHandler::class, 'handler'])->name('api.products.delete');
    });
});