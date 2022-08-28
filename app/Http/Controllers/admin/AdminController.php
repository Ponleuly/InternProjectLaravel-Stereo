<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }
    public function artist()
    {
        return view('admin.pages.artist');
    }
    public function album()
    {
        return view('admin.pages.album');
    }
    public function playlist()
    {
        return view('admin.pages.playlist');
    }
    public function track()
    {
        return view('admin.pages.track');
    }
    public function user()
    {
        return view('admin.pages.user');
    }
}
