<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\Event\IndexController;
use App\Http\Controllers\v1\Event\StoreController;
use App\Http\Controllers\v1\Event\CreatedController;
use App\Http\Controllers\v1\Event\JoinedController;
use App\Http\Controllers\v1\Event\MypageController;
use App\Http\Controllers\v1\Event\ShowController;
use App\Http\Controllers\v1\Event\UpdateController;
use App\Http\Controllers\v1\Event\DestroyController;
use App\Http\Controllers\v1\Event\DetailController;

Route::get('', IndexController::class);
Route::post('', StoreController::class);
Route::get('/created', CreatedController::class);
Route::get('/joined', JoinedController::class);
Route::get('/mypage', MypageController::class);
Route::get('/{eventId}', ShowController::class);
Route::put('/{eventId}', UpdateController::class);
Route::delete('/{eventId}', DestroyController::class);
Route::get('/{eventId}/detail', DetailController::class);
