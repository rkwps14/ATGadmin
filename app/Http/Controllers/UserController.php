<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;


class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function dashboard(){
        return view('dashboard');
    }


    // Store user detail in db

    public function store(Request $req){

        $req->validate([
            'name' => 'required|string',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|confirmed|min:8'
        ]);

        $users = new User;
        $users->name  = $req->name;
        $users->email = $req->email;
        $users->password = Hash::make($req->password);
        $users->created_at = date('Y-m-d h:i:s');
        $users->updated_at = date('Y-m-d h:i:s');
        $users->save();

        return redirect('/registration')->with('success', 'Data Register Succcessfully');

    }

    public function validLogin(Request $req){
        $auth = $req->only('email', 'password');


        if(Auth::attempt($auth)){
            return redirect()->intended('dashboard');
        }
        else{
            return redirect('/')->with('fail','Email Or Password Wrong');
        }
    }

    public function logout(Request $request)
	{
        
	    Auth::logout();

	    $request->session()->invalidate();

	    $request->session()->regenerateToken();

	    return redirect('/')->with('success','Logout successfully');
	}
}
