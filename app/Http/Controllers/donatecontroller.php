<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donatecontroller extends Controller
{
    public function index()
    {
        return view('donate');
    }
}
