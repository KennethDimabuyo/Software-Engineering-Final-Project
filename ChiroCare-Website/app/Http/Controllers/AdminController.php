<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;

class AdminController extends Controller
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
        $dates = Date::all();

        return view('admin', compact('dates'));
    }
}
