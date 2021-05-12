<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class ActiveAccount
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
        if(Auth::check() && Auth::user()->status == "active"){

            return $next($request); 
            }

            else{

                abort(403);
            }
    }
}
