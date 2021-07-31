<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$status)
    {
        if(in_array($request->user()->status_id,$status)){
            return $next($request);
        }
        return redirect()->to('/403')->with('error',"Your account is banned for ... days.");
    }
}
