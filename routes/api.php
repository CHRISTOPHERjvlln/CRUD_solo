<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProgramController;

Route::get('/ping', function () {
    return response()->json(['message' => 'API is working!']);
});

Route::apiResource('programs', ProgramController::class);
