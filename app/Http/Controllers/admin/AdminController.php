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
    public function playlist()
    {
        return view('admin.pages.playlist');
    }
    public function user()
    {
        return view('admin.pages.user');
    }
    public function log_in()
    {
        return view('admin.pages.log_in');
    }
}
