<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontak;

class KontakController extends Controller
{
        public function index()
    {
        $kontak = kontak::all();
        return view('kontak.index',compact('kontak'));
    }
}
