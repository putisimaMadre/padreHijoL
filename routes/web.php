<?php

use App\Http\Controllers\HijoController;
use App\Http\Controllers\PadreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("padre", PadreController::class);
Route::resource("hijo", HijoController::class);