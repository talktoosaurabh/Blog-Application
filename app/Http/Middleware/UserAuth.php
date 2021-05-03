<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class UserAuth
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
        if($request->path()=="login" && session()->has('userSession'))
        {
            return redirect('/blog');
        }
        if($request->path()=="blog" && !(session()->has('userSession')))
        {
            dd(session()->has('userSession'));
            exit;
            return redirect('/login');
        }
        return $next($request);
    }
}
