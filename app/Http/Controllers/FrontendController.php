<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{   
    public function index(){
        return view('index');
    }
    public function home(){
        return view('frontend.pages.home');
    }
    public function mylibrary_platlists(){
        return view('frontend.pages.mylibrary_playlists');
    }
    public function mylibrary_artists(){
        return view('frontend.pages.mylibrary_artists');
    }
    public function mylibrary_albums(){
        return view('frontend.pages.mylibrary_albums');
    }
    public function category(){
        return view('frontend.pages.category');
    }
    public function liked(){
        return view('frontend.pages.liked');
    }
    public function createplaylist(){
        return view('frontend.pages.createplaylist');
    }
    
    // *mylibrary Tab
    public function artists_view(){
        return view('frontend.pages.subpages.artists_view');
    }
    public function albums_view(){
        return view('frontend.pages.subpages.albums_view');
    }
    
}
