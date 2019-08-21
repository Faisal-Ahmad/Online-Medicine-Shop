<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\registerrequest;
use App\Http\Requests\loginrequest;
use App\user;

class Logincontroller extends Controller
{
	public function index(){
		return view('login.index');
	}

	public function valid(Request $req){
		$user = user::where('email',$req->email)->where('password',$req->password)->get();
		if(count($user)>0)
		{
			$req->session()->put('userid', $user[0]['id']);
			if($user[0]['admin']==1)
			{
				return redirect('/admin');
			}
			else
			{
				return redirect('/customer');
			}
		}
		else
		{
			$req->session()->flash('msg', "invalid username or password!");
			return redirect()->route('login.index');
		}
		
	}
	public function register(Request $req)
	{
		return view('login.register');
	}
	public function registration(registerrequest $req)
	{
		
		$user  = new user();
        $user->name = $req->name;
		$user->contact = $req->contact;
		$user->email = $req->email;
		$user->address = $req->address;
		$user->password = $req->password;
		if($req->usertype=='Admin')
		{
			$user->admin=1;
		}
		if($req->usertype=='Customer')
		{
			$user->admin=0;
		}
		$user->save();
		return redirect()->route('login.index');
	}

}
