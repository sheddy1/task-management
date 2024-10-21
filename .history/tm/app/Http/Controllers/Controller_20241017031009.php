<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use DB;
use App\Http\Controllers\UserController;
use App\Models\user;

class Controller extends BaseController
{
    function register(Request $request){
        //validating the variables
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        //getting a unique id
        $desired_length = 5;
        $unique = uniqid();

        $unique_str = substr($unique, 0, $desired_length);

        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->unique_id = $unique_str;
        $save = $user->save();

        if($save){
            return back()->with('success', 'Your Grieviance has been registered');
        }
        else{
            return back()->with('fail', 'something went wrong try again');
        }
    }

    function login(){
        return view('login');
    }

    function check(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $email = user::where('email', '=', $request->email)->first();

        if(!$email)
        {
            return back()->with('fail', 'email not recognised');
        }
        else{
            if(Hash::check($request->password, $email->password))
            {}
        }
    }
}
