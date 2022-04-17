<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lGetHobbies extends Controller
{
    function index()
    {
        return view('GetHobbies.index');
    }

    function add2(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $query = DB::table('users')->where(['username'=>$request->input('username'), 'password'=>$request->input('password')])->exists();

        if($query)
        {
                echo DB::table('hobbies')->get('hobby');
        }else{
            echo "username not valid";
        }
    }
}
