<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserById1($id){
        return "User ID: ".$id;
    }
    public function getUserById2($id){
        return "My ID: ".$id;
    }
}
