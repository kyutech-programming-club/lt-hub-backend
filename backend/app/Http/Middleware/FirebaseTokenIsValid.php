<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class FirebaseTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // ヘッダーのトークンが有効であるかのチェック
        try {
            $auth = app('firebase.auth');
            $verifiedIdToken = $auth->verifyIdToken($request->header('token'));
        } catch (InvalidToken $e) {
            abort(401);
        } catch (\InvalidArgumentException $e) {
            abort(400);
        }

        // トークンからユーザーIDを取得し、requestに追加
        $uid = $verifiedIdToken->claims()->get('sub');
        $accessUserId = User::where('firebase_id', $uid)->value('id');
        $request->margeIfMissing(['accessUserId' => $accessUserId]);

        if ($accessUserId) {
            $accessUserRole = Role::where('user_id', $accessUserId)->value('role');
            $request->margeIfMissing(['accessUserRole' => $accessUserRole]);
        }

        return $next($request);
    }
}
