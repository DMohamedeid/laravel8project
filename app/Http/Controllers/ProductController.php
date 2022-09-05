<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $fruits =
            [
            'carrot' ,
            'watermelon' ,
            'banana'
            ];
        return view('welcome' , compact('fruits'));
    }
}
