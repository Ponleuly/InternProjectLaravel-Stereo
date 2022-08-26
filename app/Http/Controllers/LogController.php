<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function log_in(){
        return view('log.log_in');
    }
    public function sign_up(){
        return view('log.sign_up');
    }
}
