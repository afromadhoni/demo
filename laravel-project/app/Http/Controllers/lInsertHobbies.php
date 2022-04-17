<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class lInsertHobbies extends Controller
{
    //
    function index()
    {
        return view('InsertHobbies.index');
    }

    function add4(Request $request)
    {

        $request->validate([
            'hobby'=>'required'
        ]);
        
        $query = DB::table('hobbies')->insert([
            'hobby'=>$request->input('hobby')
        ]);

        if($query){
            echo "hobbies have been successfuly inserted";
        }else{
            echo "Fail, something went wrong";
        }
    }
}
