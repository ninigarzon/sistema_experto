<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\ServiceTypeController;

Route::prefix('details')->group(function () {
    Route::get('/{mainMenuId}', [\App\Http\Controllers\DetailsController::class, 'get']);
});

Route::prefix('main-menu')->group(function () {
    Route::get('/{serviceTypeId}', [MainMenuController::class, 'get']);
});

Route::prefix('service-type')->group(function () {
    Route::get('/', [ServiceTypeController::class, 'get']);
});
