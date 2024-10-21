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

        $str = substr($unique, 0, $desired_length);

        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
    }
}
