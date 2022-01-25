<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\UserController;
use App\Http\Controllers\v1\EventController;
use App\Http\Controllers\v1\TalkController;
use App\Http\Controllers\v1\ParticipantController;
use App\Http\Controllers\v1\SuggestController;

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
        Route::get('', [EventController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => '/users', 'as' => 'users.'], function() {
        Route::post('', [UserController::class, 'create'])->name('create');
        Route::get('/{userId}', [UserController::class, 'show'])->name('show');
        Route::put('/{userId}', [UserController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => '/events', 'as' => 'events.'], function() {
        Route::get('', [EventController::class, 'index'])->name('index');
        Route::post('', [EventController::class, 'create'])->name('create');
        Route::get('/created', [EventController::class, 'created'])->name('created');
        Route::get('/joined', [EventController::class, 'joined'])->name('joined');
        Route::get('/mypage', [EventController::class, 'mypage'])->name('mypage');
        Route::get('/{eventId}', [EventController::class, 'show'])->name('show');
        Route::put('/{eventId}', [EventController::class, 'update'])->name('update');
        Route::delete('/{eventId}', [EventController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/talks', 'as' => 'talks.'], function() {
        Route::get('', [TalkController::class, 'index'])->name('index');
        Route::post('', [TalkController::class, 'create'])->name('create');
        Route::put('/order', [TalkController::class, 'order'])->name('order');
        Route::get('/mypage', [TalkController::class, 'mypage'])->name('mypage');
        Route::get('/{eventId}', [TalkController::class, 'show'])->name('show');
        Route::put('/{eventId}', [TalkController::class, 'update'])->name('update');
        Route::delete('/{eventId}', [TalkController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/participants', 'as' => 'participants.'], function() {
        Route::get('/{eventId}', [ParticipantController::class, 'index'])->name('index');
        Route::post('/{eventId}', [ParticipantController::class, 'create'])->name('create');
        Route::patch('/{participantId}', [ParticipantController::class, 'update'])->name('update');
        Route::delete('/{participantId}', [ParticipantController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/suggests', 'as' => 'suggests.'], function() {
        Route::get('', [SuggestController::class, 'index'])->name('index');
        Route::post('', [SuggestController::class, 'create'])->name('create');
    });
});
