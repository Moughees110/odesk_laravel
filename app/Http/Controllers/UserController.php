<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function getAllUsers(){
        return DB::select('select * from users');
    }
    public function getUser($id){
        return DB::select('select * from users where id = $id');
    }
}
