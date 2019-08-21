<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class admincontroller extends Controller
{
    public function sessionCheck($req){
        if($req->session()->has('userid')){
            return true;
        }else{
            return false;
        }
    }

    public function index(Request $req){
        if($this->sessionCheck($req)){
            $user = user::where('id', $req->session()->get('userid'))->get();
            return view('admin.index', ['admin'=>$user[0]]);
        }else{
            return redirect()->route('login.index');
        }
    }
}
