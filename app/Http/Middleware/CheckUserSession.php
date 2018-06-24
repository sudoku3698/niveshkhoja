<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckUserSession
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
       if(Session('userid'))
       {
        
       }else
       {
        return redirect('/login');
       }
        return $next($request);
    }
}