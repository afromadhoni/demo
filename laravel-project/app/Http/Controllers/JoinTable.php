<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserList;

use Illuminate\Support\Facades\DB;



class JoinTable extends Controller
{
    //
    function index()
    {
    	$data = UserList::join('hobbies', 'hobbies.id', '=', 'users.id')
                    ->join('user_hobbies', 'user_hobbies.id', '=', 'hobbies.id')
              		->get(['users.id', 'users.username', 'hobbies.hobby','user_hobbies.id_hobby']);

       	/*Above code will produce following query

        Select 
        	`country`.`country_name`, 
        	`state`.`state_name`, 
        	`city`.`city_name` 
        from `country` 
        inner join `state` 
        	on `state`.`country_id` = `country`.`country_id` 
        inner join `city` 
        	on `city`.`state_id` = `state`.`state_id`

        */

        return view('ListUserHobbies.index', compact('data'));
    }
}
