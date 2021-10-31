<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
	public function login()
	{
		return view("/page/admin/auth/login");
	}

	public function post_login(Request $request)
	{
		$credentials = [
			"username" => $request->username,
			"password" => $request->password
		];

		if (Auth::attempt(["username" => $request->username, "password" => $request->password])) {

			$request->session()->regenerate();

			return redirect()->intended("/page/admin/dashboard");

		}

		return redirect("/page/admin/login");
	}

	public function logout()
	{
		Auth::logout();

		return redirect("/page/admin/login"); 
	}
}
