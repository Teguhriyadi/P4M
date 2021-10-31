<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
	public function layouts()
	{
		return view("page/layouts/layouts_admin");
	}

	public function dashboard()
	{
		return view("/page/admin/dashboard");
	}
}
