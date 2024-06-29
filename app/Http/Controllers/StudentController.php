<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showUser()
    {
        // pluck is used to get the value of the column
        // get is used to get all the value
        // distinct is used to get the unique value
        $user = DB::table('students')->select('id', 'name', "age as  user_age", "image")->distinct()->get();
        // dd means dump and die
        // dd($user);
        return view('Pages.Dashboard', ['users' => $user]);
    }
    public function showUserProfile(string $id)
    {
        $user = DB::table('students')->find($id);
        // dd means dump and die
        // dd($user);
        return view('Pages.ShowUser', ['users' => $user]);
    }
}
