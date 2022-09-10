<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{

    public function log_in()
    {
        return view('authUser.log_in');
    }
    public function user_login(Request $request)
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
            return redirect('/home');
        } else {
            return redirect('/')
                ->with('alert', 'Wrong Email or Password !');
        }
    }
    public function user_logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
