<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthAdminController extends Controller
{
    public function login()
    {
        return view('admin.auth.log_in');
    }
    public function auth_login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($arr)) {
            return redirect('/admin_stereo/dashboard');
        } else {
            return redirect('/admin_stereo')
                ->with('alert', 'Wrong Email or Password !');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/admin_stereo');
    }
}
