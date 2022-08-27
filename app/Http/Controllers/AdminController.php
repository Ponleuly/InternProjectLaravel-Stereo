<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AddCategory;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function dashboard(){
        
        return view('admin.pages.dashboard');
    }
     /*
    public function category(){
       
        if($req->isMethod('post')){
            $name_category = $req->input('name_category');
            $addCategory = new AddCategory;
            $addCategory->name_category=$name_category;
            $addCategory->save(); 
        }
        
        
        $query = DB::table('table_category');
        $query = $query->orderBy("id_category", "desc");
        $data = $query->paginate(25);
        
        return view('admin.pages.category');
    }
    public function add_category(){
        return view('admin.pages.subPages.add_category');
    }*/
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
