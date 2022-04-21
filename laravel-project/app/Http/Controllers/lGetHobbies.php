<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserList;


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
        $id = DB::table('hobbies')->get('hobby');  

        if($query)
        {
            echo $id;
        }else{
            echo "username not valid";
        }
    }
}

