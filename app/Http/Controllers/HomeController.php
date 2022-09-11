<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function fluentStrings()
    {
        echo '<h1> Fluent String</h1> <br>';

        $slice = Str::of('Welcome To My Web page')->after('To');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers')->afterLast('\\');
        echo $slice2 . '<br>';

        $string = Str::of('Hello')->append('world');
        echo $string . '<br>';

        $string1 = Str::of('HELLO WORLD')->lower();
        echo $string1 . '<br>';

        $string2 = Str::of('hello world')->upper();
        echo $string2 . '<br>';

        $string3 = Str::of('Laravel 7.0')->replace('7.0','8.1');
        echo $string3 . '<br>';

        $string4 = Str::of('this is title')->title();
        echo $string4 . '<br>';

        $string5 = Str::of('laravel 8 framework')->slug('-');
        echo $string5 . '<br>';

        $string6 = Str::of('Laravel Framework')->substr(8,5);
        echo $string6 . '<br>';

        $string7 = Str::of('/laravel/8/framework/')->trim('/');
        echo $string7 . '<br>';
    }
}
