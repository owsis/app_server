<?php

namespace App\Http\Controllers\AuthT001;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    public function __construct() {
        $this->middleware('guest:t001', ['except' => 'logout']);
    }

    public function loginAdmin() {
        return view('auth.login-admin');
    }

    public function login(Request $request) {
        if (!Auth::guard('t001')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        }
        return redirect()->intended(route('dashboard'));

    }

}
