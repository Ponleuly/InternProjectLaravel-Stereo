<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AddCategory;


class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function dashboard(){
        
        return view('admin.pages.dashboard');
    }
    public function category(Request $req){
        if($req->isMethod('post')){
            $name_category = $req->input('name_category');
            $img = $req->input('img');
            $addCategory = new AddCategory;
            $addCategory->name_category=$name_category;
            $addCategory->img=$img;
            $addCategory->save(); 
        }
        $query = DB::table('table_category');
        $query = $query->orderBy("id_category", "asc");
        $data = $query->paginate(15);
        return view('admin.pages.category', $data);
    }
    public function country(){
        return view('admin.pages.country');
    }
    public function artist(){
        return view('admin.pages.artist');
    }
    public function album(){
        return view('admin.pages.album');
    }
    public function playlist(){
        return view('admin.pages.playlist');
    }
    public function track(){
        return view('admin.pages.track');
    }
    public function user(){
        return view('admin.pages.user');
    }
}
