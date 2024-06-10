<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
/*
Route::get('/', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::get("/", [UsuarioController::class, "index"]);
Route::get("/find/{id}", [UsuarioController::class, "findById"]);
Route::post("/store", [UsuarioController::class, "store"]);
