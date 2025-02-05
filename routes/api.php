<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeBedRoomController;


Route::resource('type/bedroom', TypeBedRoomController::class)
->only(['index', 'show','edit','store']);

Route::middleware(['auth:sanctum'])->group(function () {
    //protected
});
