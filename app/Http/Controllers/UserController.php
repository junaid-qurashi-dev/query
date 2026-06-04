<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function ShowUser()
    {
        $user = DB::table('users')->get();

        // Return Data In josn formate //
        return $user;
    }
}
