<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{
    public function sign_up()
    {
        return view('frontend.authUser.sign_up');
    }
    public function user_signup(Request $request)
    {
        $input = $request->all();
        //$input['role'] = 0;
        $input['password'] = bcrypt($request->password);
        User::create($input);
        return redirect('/')
            ->with('alert', 'You are signed up successfully !');
    }
}
