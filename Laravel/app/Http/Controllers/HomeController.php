<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function acknowledgement()
    {
        return view('acknowledgement');
    }
}