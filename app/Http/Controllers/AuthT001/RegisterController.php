<?php

namespace App\Http\Controllers\AuthT001;

use App\Http\Controllers\Controller;
use App\T001;
use Illuminate\Http\Request;

class RegisterController extends Controller {

	public function __construct() {
		$this->middleware('guest:t001');
	}

	public function regAdmin() {
		return view('auth.register-admin');
	}

	protected function create(Request $req) {
		$this->validate($req, [
			'phone' => 'required|max:20|unique:t001s',
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:t001s',
			'ktp' => 'required|max:255',
			'password' => 'required|min:6|confirmed',
		]);

		T001::create([
			'phone' => $req->phone,
			'email' => $req->email,
			'name' => strtoupper($req->name),
			'ktp' => $req->ktp,
			'password' => bcrypt($req->password),
			'api_token' => bcrypt($req->email),
			'role_user' => '1',
		]);

		return redirect()->intended(route('dashboard'));

	}
}
