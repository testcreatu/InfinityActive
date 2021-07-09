<?php

namespace App\BackendRepository\ValidationRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class ValidationRepository extends Controller
{
	public function validateName($request)
	{
		$request->validate([
			'name'=>'required',
		]);
	}

	public function validateEmail($request)
	{
		$request->validate([
			'email'=>'required|unique:users,email|email',
		]);
	}

	public function validateUpdateEmail($request, $id)
	{
		$request->validate([
			'email'=>['required','email',Rule::unique('users')->ignore($id)],
		]);
	}

	public function validatePassword($request)
	{
		$request->validate([
			'password'=>'required|min:6|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
		]);
	}

	public function validateRole($request)
	{
		$request->validate([
			'role'=>'required',
		]);
	}

	public function validateStatus($request)
	{
		$request->validate([
			'status'=>'required',
		]);
	}
}