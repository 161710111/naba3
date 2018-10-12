<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\home;
use File;

class indexController extends Controller
{
    public function index()
    {
        $home = home::all();
        return view('home.index',compact('home'));
    }
}
