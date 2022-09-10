<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Checklogout;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user()
    {
        $users = User::where('role', '0')->get();
        $count = 1;
        return view(
            'admin.pages.user',
            compact(
                'count',
                'users'
            )
        );
    }
    public function remove_user($id_user)
    {
        $remove_user = User::where('id', $id_user)->first();
        $remove_user->delete();

        return redirect('/admin_stereo/user')
            ->with(
                'alert',
                'User ' . '"' . $remove_user->username . '"' .
                    ' is deleted successfully !'
            );
    }
}
