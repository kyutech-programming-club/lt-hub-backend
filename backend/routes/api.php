<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\LoginController;
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
    Route::get('/login', LoginController::class)->name('login');

    Route::group(['prefix' => '/users', 'as' => 'users.'], function() {
        Route::post('', [UserController::class, 'store'])->name('store');
        Route::get('/{userId}', [UserController::class, 'show'])->name('show');
        Route::put('/{userId}', [UserController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => '/events', 'as' => 'events.'], function() {
        require __DIR__ . '/api/event.php';
    });

    Route::group(['prefix' => '/talks', 'as' => 'talks.'], function() {
        Route::get('', [TalkController::class, 'index'])->name('index');
        Route::post('', [TalkController::class, 'store'])->name('store');
        Route::put('/order', [TalkController::class, 'order'])->name('order');
        Route::get('/mypage', [TalkController::class, 'mypage'])->name('mypage');
        Route::get('/{talkId}', [TalkController::class, 'show'])->name('show');
        Route::put('/{talkId}', [TalkController::class, 'update'])->name('update');
        Route::delete('/{talkId}', [TalkController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/participants', 'as' => 'participants.'], function() {
        Route::get('/{eventId}', [ParticipantController::class, 'index'])->name('index');
        Route::post('/{eventId}', [ParticipantController::class, 'store'])->name('store');
        Route::patch('/{participantId}', [ParticipantController::class, 'update'])->name('update');
        Route::delete('/{participantId}', [ParticipantController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/suggests', 'as' => 'suggests.'], function() {
        Route::get('', [SuggestController::class, 'index'])->name('index');
        Route::post('', [SuggestController::class, 'store'])->name('store');
    });
});
