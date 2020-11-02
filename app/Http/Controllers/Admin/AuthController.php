<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    } // ./login

    public function do_login(LoginRequest $request)
    {
        $cert = $request->only('email', 'password');

        $remember_me = request()->has('remember_me') ? true : false;

        if (Auth::guard('admin')->attempt($cert, $remember_me)) {
            return redirect(route('admin.dashboard'))
                ->with(['success' => 'Login successfely']);
        }

        return redirect()->route('admin.login')
            ->with(['error' => 'login vaild ... check your email and password']);
    } // ./do_login


}// ./AuthController