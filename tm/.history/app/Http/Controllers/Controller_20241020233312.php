<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use DB;
use App\Http\Controllers\UserController;
use App\Models\user;
use App\Models\projects;
use App\Models\tasks;
use App\Models\history;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    private $edit_display;

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
        $edit_display1 ="none";
        $project_name = "projects::get()";
        return view('main', [
            'project'=>$project,
            'edit_display'=>$edit_display1,
            'project_name'=>$project_name,
        ]);
    }

    function task(){
        $project = projects::get();
        $task = tasks::get();
        $task_name= "";
        $project_name= "";
        //session::put('edit_display', 'none');;
        $edit_display1 ="none";
        return view('task', [
            'task'=>$task,
            'project'=>$project,
            'edit_display'=>$edit_display1,
            'project_name'=>$project_name,
            'task_name'=>$task_name,
        ]);
    }

    function delete_task(Request $request){
        $edit_id = $request->edit_id;

        projects::where('unique_id', '=', $edit_id)->delete();

        tasks::where('project_id', '=', $edit_id)->delete();

        return back();

    }

    function check_task(Request $request){
        $edit_id = $request->edit_id;

        $task_name= tasks::where('unique_id', '=', $edit_id)->value('name');

        $project_name= tasks::where('unique_id', '=', $edit_id)->value('project_name');

        $project_id = tasks::where('unique_id', '=', $edit_id)->value('project_id');

        $history = new history;
        $history->unique_id= $request->edit_id;
        $history->name= $task_name;
        $history->project_name= $project_name;
        $history->project_id= $project_id;
        $history->save();

        $task = tasks::where('unique_id', '=', $edit_id)->delete();

        return back();

    }

    function history(){
        return view('history');
    }

    function task_edit(Request $request){
        $edit_id = $request->edit_id;
        $task_name= tasks::where('unique_id', '=', $edit_id)->value('name');
        $project_name= tasks::where('unique_id', '=', $edit_id)->value('project_name');

        //session::put('edit_display', 'block');
        session::put('edit_id', $edit_id);
        $edit_display1 ="block";

        $project = projects::get();
        $task = tasks::get();

        //return back();
        return view('task',
        [
            'edit_display' => $edit_display1,
            'task'=>$task,
            'project'=>$project,
            'project_name'=>$project_name,
            'task_name'=>$task_name,
        ]);
    }

    function project_edit(Request $request){
        $edit_id = $request->edit_id;
        $project_name= projects::where('unique_id', '=', $edit_id)->value('name');

        //session::put('edit_display', 'block');
        session::put('edit_id', $edit_id);
        $edit_display1 ="block";

        $project = projects::get();
        $task = tasks::get();

        //return back();
        return view('main',
        [
            'edit_display' => $edit_display1,
            'project'=>$project,
            'project_name'=>$project_name,
        ]);
    }

    function create_project(Request $request){
        $request->validate([
            'project_name'=>'required',
        ]);

        $unique_str = substr(sha1(time()), 0, 5);

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
            'task_name'=>'required',
            'project_input_select'=>'required'
        ]);

        $unique_str = substr(sha1(time()), 0, 5);

        echo $request->project_input_select; echo "<br>";
        echo $unique_str;

        $project_name = projects::where('unique_id', '=', $request->project_input_select)->value('name');

        echo $project_name;

        $task = new tasks;
        $task->unique_id = $unique_str;
        $task->name = $request->task_name;
        $task->project_id = $request->project_input_select;
        $task->project_name = $project_name;
        $save = $task->save();

        if($save){
            return back()->with('success', 'your task has been saved');
        }
        else{
            return back()->with('fail', 'Your task was not saved');
        }
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
                session::put('edit_display', 'block');
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
