<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\ContactController;

Route::post('/contacts', [ContactController::class, 'store']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/galleries', [GalleryController::class, 'index']);
Route::get('/galleries/{slug}', [GalleryController::class, 'show']);

Route::get('/menus', [MenuController::class, 'index']);

Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/rooms/{id}', [RoomController::class, 'show']);
