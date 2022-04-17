<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class lUserCheck extends Controller
{
    //
    function index()
    {
        return view('UserCheck.index');
    }

    function add1(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $query = DB::table('users')->where(['username'=>$request->input('username'), 'password'=>$request->input('password')])->exists();

        if($query)
        {
            echo "username valid";
        }else{
            echo "username not valid";
        }
    }
}
