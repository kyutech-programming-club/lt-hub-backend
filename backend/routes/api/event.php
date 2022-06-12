<?php

use Illuminate\Support\Facades\Route;

Route::get('', 'v1/Event/IndexController');
Route::post('', 'v1/Event/StoreController');
Route::get('/created', 'v1/Event/CreatedController');
Route::get('/joined', 'v1/Event/JoinedController');
Route::get('/mypage', 'v1/Event/MypageController');
Route::get('/{eventId}', 'v1/Event/ShowController');
Route::put('/{eventId}', 'v1/Event/UpdateController');
Route::delete('/{eventId}', 'v1/Event/DestroyController');
Route::get('/{eventId}/detail', 'v1/Event/DetailController');
