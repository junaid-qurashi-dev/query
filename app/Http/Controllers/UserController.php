<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function ShowUser()
    {
        // $users = DB::table('users')->where('city', 'nagaur')->get();
        $users = DB::table('users')->select('city')->distinct()->get();
        return $users;
        // Return Data In josn formate //
        // return view('user', ['data' => $users]);
    }
    public function SingleUser($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('single', ['data' => $user]);
    }
}
