<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserList;





class lUserHobbies extends Controller
{
    //
    function index()
    {
        return view('UserHobbies.index');
    }

    function add7(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $query = DB::table('users')->where(['username'=>$request->input('username'), 'password'=>$request->input('password')])->exists();

        if($query)
        {   
            $data = UserList::join('hobbies', 'hobbies.id', '=', 'users.id')
                            ->join('user_hobbies', 'user_hobbies.id', '=', 'hobbies.id')
                          	->get(['users.id', 'users.username', 'hobbies.hobby','user_hobbies.id_hobby']);
            
            return view('ListUserHobbies.index', compact('data'));       

        }else{
            echo "username not valid";
        }

        
    }
}
