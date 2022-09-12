<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        return $response->json() ;
    }

    public function show($id)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);

        return $response->json();
    }

    public function store(Request $request)
    {
        $data = [];

        $data['userId'] = $request->userId;
        $data['title'] = $request->title;
        $data['body'] = $request->body;

        $response = Http::post('https://jsonplaceholder.typicode.com/posts', $data);

        return $response->json() ;
    }

    public function update(Request $request , $id)
    {
        $data = [];

        $data['userId'] = $request->userId;
        $data['title'] = $request->title;
        $data['body'] = $request->body;
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/' . $id , $data);

        return $response->json();
    }

    public function delete($id)
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);

        return $response->json();
    }




    public function allPostsDB()
    {
        $posts = DB::table('posts')->get();

        return view('posts', compact('posts'));
    }

}
