<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class lAssignHobbies extends Controller
{
    //
    function index()
    {
        return view('AssignHobbies.index');
    }

    function add5(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $query = DB::table('users')->where(['username'=>$request->input('username'), 'password'=>$request->input('password')])->exists();

        if($query)
        {
             return view('InsertIdHobbies.index');
        }else{
            echo "username not valid";
        }
    }
}
