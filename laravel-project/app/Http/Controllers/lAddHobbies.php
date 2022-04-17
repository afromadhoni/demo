<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class lAddHobbies extends Controller
{
    function index()
    {
        return view('AddHobbies.index');
    }

    function add3(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $query = DB::table('users')->where(['username'=>$request->input('username'), 'password'=>$request->input('password')])->exists();

        if($query)
        {
             return view('InsertHobbies.index');
        }else{
            echo "username not valid";
        }
    }
}
