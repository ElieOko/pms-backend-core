<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypePlatController;
use App\Http\Controllers\TypeClientController;
use App\Http\Controllers\TypeBedRoomController;
use App\Http\Controllers\TypeCantineController;
use App\Http\Controllers\TypeCuisineController;
use App\Http\Controllers\TypeProgrammeFidelisationController;


Route::resource('type/bedroom', TypeBedRoomController::class)
->only(['index', 'show','edit','store']);

Route::resource('type/client', TypeClientController::class)
->only(['index', 'show','edit','store']);

Route::resource('type/cuisine', TypeCuisineController::class)
->only(['index', 'show','edit','store']);

Route::resource('type/cantine', TypeCantineController::class)
->only(['index', 'show','edit','store']);

Route::resource('type/plat', TypePlatController::class)
->only(['index', 'show','edit','store']);

Route::resource('type/programme/fidelisation', TypeProgrammeFidelisationController::class)
->only(['index', 'show','edit','store']);



Route::middleware(['auth:sanctum'])->group(function () {
    //protected
});
