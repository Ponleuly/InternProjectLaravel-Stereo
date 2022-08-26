<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function category(){
        return view('admin.category');
    }
    public function country(){
        return view('admin.country');
    }
    public function artist(){
        return view('admin.artist');
    }
    public function album(){
        return view('admin.album');
    }
    public function playlist(){
        return view('admin.playlist');
    }
    public function track(){
        return view('admin.track');
    }
}
