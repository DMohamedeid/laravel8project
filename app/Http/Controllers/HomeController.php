<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Hi From Controller ';
    }

    public function parameter($parameter)
    {
        return 'hi from Controller with a parameter ' . $parameter;
    }
}
