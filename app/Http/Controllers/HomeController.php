<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Club;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome')->with('var', Club::all());
    }
}
