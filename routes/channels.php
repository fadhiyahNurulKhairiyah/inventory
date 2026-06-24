<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::middleware('throttle:60,1')->group(function () {
    Route::apiResource('v1/items', ItemController::class);
});