<?php

use App\Http\Controllers\ViragokController;
use Illuminate\Support\Facades\Route;

Route::get('/viragok', [ViragokController::class, 'index']);
Route::post('/viragAdd', [ViragokController::class, 'store']);