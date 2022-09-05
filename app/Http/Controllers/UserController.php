<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users');
    }

    public function values()
    {
        $user = "mohamed";

        $person = array(
            'name'      => 'Mohamed',
            'email'     => 'Mohamed@gmail.com',
            'password'  =>'123456789',
        );

        return view('users',compact('user','person'));
    }
}
