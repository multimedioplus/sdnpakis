<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use auth;
use DB;

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
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        $role = Auth::user()->role;
        $data = DB::table('pengumumen')->orderBy('id', 'DESC')->simplePaginate(2);
        return view('admin.dashboard')->with("data", $data)->with('role', 'guru');
    }
}
