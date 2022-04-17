<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class lInsertIdHobbies extends Controller
{
    //
    function index()
    {
        return view('InsertIdHobbies.index');
    }

    function add6(Request $request)
    {

        $request->validate([
            'idhobby'=>'required'
        ]);
        
        $query = DB::table('user_hobbies')->insert([
            'id_hobby'=>$request->input('idhobby'),
            'id_user'=>$request->input('idhobby')
        ]);

        if($query){
            echo "id hobby has been successfuly inserted";
        }else{
            echo "Fail, something went wrong";
        }
    }
}
