<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class verifyHasAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->hasAccess()) {
            return $next($request);
        }

        if (($request->user() && !$request->user()->subscribed('Online classes')) ) {    
            return redirect('subscribe');
        }

        return $next($request);
    }
}
