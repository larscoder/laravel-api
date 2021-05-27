<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function() {
    Route::apiResource('posts', App\Http\Controllers\Api\V1\PostController::class)
        ->only(['index', 'show']);
});
