<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

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
        try {
            $auth = app('firebase.auth');
            $verifiedIdToken = $auth->verifyIdToken($request->header('token'));
        } catch (InvalidToken $e) {
            // return $e->getMessage();
            return '無効なトークン';
        } catch (\InvalidArgumentException $e) {
            // return $e->getMessage();
            return 'ヘッダーなしお';
        }
        // $uid = $verifiedIdToken->claims()->get('sub');

        return $next($request);
    }
}
