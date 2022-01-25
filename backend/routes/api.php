<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// 将来的にtokenのmiddlewareを追加
Route::group(['prefix' => '/v1', 'as' => 'v1.'], function () {
    Route::group(['prefix' => '/login', 'as' => 'login.'], function() {
        // login
    });

    Route::group(['prefix' => '/users', 'as' => 'users.'], function() {
        Route::post('', [UserController::class, 'create'])->name('create');
        Route::get('/{userId}', [UserController::class, 'show'])->name('show');
        Route::put('/{userId}', [UserController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => '/events', 'as' => 'events.'], function() {
        // events
    });

    Route::group(['prefix' => '/talks', 'as' => 'talks.'], function() {
        // talks
    });

    Route::group(['prefix' => '/participants', 'as' => 'participants.'], function() {
        // participants
    });

    Route::group(['prefix' => '/suggests', 'as' => 'suggests.'], function() {
        // suggests
    });
});
