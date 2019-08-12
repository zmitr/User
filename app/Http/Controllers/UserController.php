<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getUsers() {

        $users = User::all();
        return view('post_edit',compact('users'));
    }
}
