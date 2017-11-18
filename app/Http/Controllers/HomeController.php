<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Club;

class HomeController extends Controller
{
    public function welcome(){
        return view('welcome')->with('var', Club::all());
    }
}
