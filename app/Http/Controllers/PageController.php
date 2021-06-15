<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Homepage

    public function index()
    {
        return view('main');
    }

    public function comics()
    {
        return view('comics');
    }
}
