<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
use Session;


class CheckAdmin
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
        $user = User::where('id',Auth::guard('web')->user()->id)->get()->first();
        if ($user['role_id'] != 1) {
            Session::flush();
            // return response()->json("You're not authorized");
            // dd('here');
            return redirect('admin/login');
            // echo "You're not authorized";
        }

        return $next($request);
    }
}
