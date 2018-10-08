<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Vinkla\Hashids\Facades\Hashids;

class UserController extends Controller
{
    public function users(Request $request)
    {
        $users = User::paginate(10);
        return view("users", ["users" => $users]);
    }

    public function user($id){
        $user = User::find($id);
        return view("user-id",["user" => $user]);
    }
}
