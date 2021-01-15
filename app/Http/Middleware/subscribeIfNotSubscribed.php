<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class subscribeIfNotSubscribed
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
        if ($request->user() && !$request->user()->subscribed('OnlineClass')) {            
            return redirect('subscribe');
        }

        return $next($request);
    }
}
