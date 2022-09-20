<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return $users;
    }

    public function create(){
        $users = User::all();
        return $users;
    }

    public function store(){
        $users = User::all();
        return $users;
    }

   
    public function show($user_id){
        $user = User::find($user_id);
        if(is_null($user)){
            return Response()->json('User not found', 404);
        }
        return Response()->json($user);
    }

}
