<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function home()
    {
        $users = User::all();
        $title = 'users';

        return view('users.index', compact('users'));
    }

    public function show($id)
    {

        $user = User::find($id);
        return view('users.show', compact('user'));
    }
}
