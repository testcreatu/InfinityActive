<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
use Session;


class CheckVendor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guard()->check())
        {


            $user = User::where('id',Auth::guard('web')->user()->id)->get()->first();
            if ($user['role_id'] != 2) {
                Session::flush();
                // return response()->json("You're not authorized");
                // dd('here');
                return redirect('/');
                // echo "You're not authorized";
            }

            return $next($request);
        }
        else
        {
            Session::flush();
            return redirect('/');
        }
    }
}
