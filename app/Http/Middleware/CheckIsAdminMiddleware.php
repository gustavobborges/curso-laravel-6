<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Middleware;
use Illuminate\Cache\RedisTaggedCache;

class CheckIsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        $user = auth()->user();
        // if($user->email != 'gustavo.borges@ibridge.com.br') {
        if (in_array($user->email, ['damian.barrows@example.com', 'deanna.sawayn@example.com'])) {
            return redirect('/');
        }

        return $next($request);
    }
}
