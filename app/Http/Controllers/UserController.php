<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function ShowUser()
    {
        $users = DB::table('users')->where('id', 3)->get();

        // Return Data In josn formate //
        return view('user', ['data' => $users]);
    }
}
