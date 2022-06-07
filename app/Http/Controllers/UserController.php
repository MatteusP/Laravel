<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users =User::all();
        return view('users', [
           'users' => $users,
        ]);
    }

    public function show(User $user){
        $user->teams()->attach(1);
        //sync, suncWhithoutDetaching, detach
        $user->load('teams');
        return $user->teams;
    }
}
