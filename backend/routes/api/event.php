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

Route::get('', IndexController::class)->name('index');
Route::post('', StoreController::class)->name('store');
Route::get('/created', CreatedController::class)->name('created');
Route::get('/joined', JoinedController::class)->name('joined');
Route::get('/mypage', MypageController::class)->name('mypage');
Route::get('/{eventId}', ShowController::class)->name('show');
Route::put('/{eventId}', UpdateController::class)->name('update');
Route::delete('/{eventId}', DestroyController::class)->name('destroy');
Route::get('/{eventId}/detail', DetailController::class)->name('detail');
