<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("page")->group(function() {

	Route::prefix("admin")->group(function() {

		Route::get("/", [AppController::class, "dashboard"]);
		Route::get("/layouts", [AppController::class, "layouts"]);
		Route::get("/dashboard", [AppController::class, "dashboard"]);

		Route::get("/login", [LoginAdminController::class, "login"]);

		// Data Users
		Route::prefix("users")->group(function() {
			Route::get("/", [AdminController::class, "index"]);
			Route::post("/tambah", [AdminController::class, "tambah"]);
			Route::get("/{id_role}/edit", [AdminController::class, "edit"]);
			Route::post("/simpan", [AdminController::class, "simpan"]);
			Route::post("/hapus", [AdminController::class, "hapus"]);
		});

		// Data Role
		Route::prefix("role")->group(function() {
			Route::get("/", [RoleController::class, "index"]);
			Route::post("/tambah", [RoleController::class, "tambah"]);
			Route::get("/{id_role}/edit", [RoleController::class, "edit"]);
			Route::post("/simpan", [RoleController::class, "simpan"]);
			Route::post("/hapus", [RoleController::class, "hapus"]);
		});

	});

});

