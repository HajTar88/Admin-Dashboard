<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Sessionl;
class DashLogin
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
        //if(auth()->user()->DashLogin  == 'Admin'){
            return $next($request);
         // }
          return redirect('home')->with('error','Permission Denied!!! You do not have administrative access.');
        return $next($request);
    }
}
