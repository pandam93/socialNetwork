<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$users = DB::table('users')->get();
        $users = User::all();

        //[pts] Here we have to change it to "users"
        //return view('home',['user' => $users]);
        return view('home')->with('user', $users);

    }
}
