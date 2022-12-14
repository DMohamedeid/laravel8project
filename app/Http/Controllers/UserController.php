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

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);
        $email = $request->email;
        $password = $request->password;

        return 'E-Mail : ' . $email . '<br>' . 'Password : ' . $password;
    }
}
