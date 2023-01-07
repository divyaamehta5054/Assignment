<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Firstcontroller extends Controller
{
    function index()
    {
        return view('home');
    }
    function template()
    {
        return view('header').view('login').view('footer');
    }
}
