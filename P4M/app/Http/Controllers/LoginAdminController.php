<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
	public function login()
	{
		return view("/page/admin/auth/login");
	}
}
