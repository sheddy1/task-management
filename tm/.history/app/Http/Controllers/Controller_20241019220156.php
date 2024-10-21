<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use DB;
use App\Http\Controllers\UserController;
use App\Models\user;
use App\Models\projects;
use Illuminate\Support\Facades\Hash;

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
        //$desired_length = 5;
        //$unique = uniqid();

        //$unique_str = substr($unique, 0, $desired_length);

        $unique_str = get_rand_alphanumeric(8);

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

    function welcome(){
        return view('welcome');
    }

    function main(){
        $project = projects::get();
        return view('main', [
            'project'=>$project,
        ]);
    }

    function task(){
        $project = projects::get();
        return view('task', [
            'project'=>$project,
        ]);
    }

    function history(){
        return view('history');
    }

    function create_project(Request $request){
        $request->validate([
            'project_name'=>'required',
        ]);

        //getting a unique id
        $desired_length = 5;
        $unique = uniqid();

        $unique_str = substr($unique, 0, $desired_length);

        //saving the project name
        $projects = new projects;
        $projects->name = $request->project_name;
        $projects->unique_id = $unique_str;
        $save = $projects->save();

        if($save){
            return back()->with('success', 'Your Grieviance has been registered');
        }
        else{
            return back()->with('fail', 'something went wrong try again');
        }
    }

    function create_task(Request $request){
        $request->validate([
            'project_name'=>'required',
            'project_input_select'=>'required'
        ]);

        //getting a unique id
        $desired_length = 5;
        $unique = uniqid();

        $unique_str = substr($unique, 0, $desired_length);

        echo $request->project_name;
        //$str = random_strings(10);


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
            {

                $request->session()->put('loggeduser', $email->unique_id);
                return redirect('Main');
            }
            else
            {
                return back()->with('fail', 'incorrect password');
            }
        }
    }
}
