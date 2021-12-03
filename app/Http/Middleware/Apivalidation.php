<?php

namespace App\Http\Middleware;
use App\Models\Systemuser;
use Closure;
use Illuminate\Http\Request;

class Apivalidation
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
        $username = $request->header("Authorization");
        $Systemusers = Systemuser::select('*')->where('U_username',$username)->get();
        $count=$Systemusers->count();
        if ($count>0) {
            return $next($request);
            
        }
        else return r;
    }
}
