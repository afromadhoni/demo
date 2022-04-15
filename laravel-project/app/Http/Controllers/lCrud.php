<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class lCrud extends Controller
{
    //
    function index()
    {
        return view('crud.index');
    }

    function add(Request $request)
    {
        $request->validate([
            'username'=>'required|unique:users',
            'password'=>'required'
        ]);

        $query = DB::table('users')->insert([
            'username'=>$request->input('username'),
            'password'=>$request->input('password')
        ]);

        if($query){
            echo "Data have been successfuly inserted";
        }else{
            return back()->with('fail','something went wrong');
        }
    }
}
