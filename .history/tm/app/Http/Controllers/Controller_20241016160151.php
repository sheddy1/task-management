<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

abstract class Controller
{
    public function register(Request $request){
        $request->validate([
            'zone'=>'required',

        ]);
    }
}
