<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{   
    public function log_in(){
        return view('pages.log_in');
    }
    public function sign_up(){
        return view('pages.sign_up');
    }
    public function index(){
        return view('index');
    }
    public function home(){
        return view('pages.home');
    }
    public function mylibrary_platlists(){
        return view('pages.mylibrary_playlists');
    }
    public function mylibrary_artists(){
        return view('pages.mylibrary_artists');
    }
    public function mylibrary_albums(){
        return view('pages.mylibrary_albums');
    }
    public function category(){
        return view('pages.category');
    }
    public function liked(){
        return view('pages.liked');
    }
    public function createplaylist(){
        return view('pages.createplaylist');
    }
    
    // *mylibrary Tab
    public function artists_view(){
        return view('pages.subpages.artists_view');
    }
    public function albums_view(){
        return view('pages.subpages.albums_view');
    }
    
}
