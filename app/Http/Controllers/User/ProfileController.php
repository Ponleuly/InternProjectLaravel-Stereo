<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function user_profile()
    {
        return view('frontend.pages.user.profile');
    }
    public function edit_profile($id_user)
    {
        $user = User::where('id', $id_user)->first();

        return view(
            'frontend.pages.user.update_profile',
            compact('user')
        );
    }
    public function update_profile(Request $request, $id_user)
    {
        $update_user = User::where('id', $id_user)->first();
        $img_user = $update_user->avatar;

        $update_user->username = $request->input('username');
        $update_user->email = $request->input('email');
        $update_user->gender = $request->input('gender');

        if ($request->hasFile('avatar')) {
            $img_path = 'public/uploads/avatars/' . $img_user;
            if (File::exists($img_path)) {
                File::delete($img_path);
            }

            $destination_path = 'public/uploads/avatars/';
            $image = $request->file('avatar');
            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $update_user['avatar'] = $image_name;
        }
        $update_user->update();
        return redirect('/profile');
    }
    public function change_password(Request $request, $id_user)
    {
        $change_password = User::where('id', $id_user)->first();
        $password = $change_password->password;
        //$current_user = Auth::user();
        $input = $request->all();
        if (Hash::check($input['current_password'], $password)) {
            $change_password['password'] = bcrypt($input['new_password']);
            $change_password->update();
        } else {
            return redirect()->back()->with('error', 'Current password does not matched !');
        }

        //$change_password->update();
        return redirect('/profile');
        //return dd($input);
    }
}
