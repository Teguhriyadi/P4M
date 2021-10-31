<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
	public function index()
	{
		$data = [
			"data_users" => User::orderBy("nama", "ASC")->get()
		];

		return view("/page/admin/users/index", $data);
	}
}
