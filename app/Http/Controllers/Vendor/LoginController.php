<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    	$email = $request['email'];
    	$password = $request['password'];
    	$role = 'vendor';
    	if(Auth::guard()->attempt(['email' => $email , 'password' => $password], $request->filled('remember')))
		{
			if (Auth::guard('web')->user()->role_id = 2) {
				return redirect('home');
			}
			else
			{
				Session::flush();
				return redirect('/');
			}
		}
		else
		{
			Session::flush();
			return redirect('/');
		}
    }
}
