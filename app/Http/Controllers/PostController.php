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

        return view('Posts.index', compact('posts'));
    }

    public function storePostDB(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect()->route('post.indexPostsDB')->with('post_created','Post has been created');
    }

    public function showPostDB($id , $type)
    {
        $post = DB::table('posts')->where('id' , $id)->first();

        if ($type == 'show')
        {
            return view('Posts.show',compact('post'));
        }else{
            return view('Posts.edit',compact('post'));
        }
    }


    public function updatePostDB(Request $request)
    {
       $post = DB::table('posts')->where('id', $request->id)->update([
           'title' => $request->title,
           'body' => $request->body,
       ]);
       if ($post){
           $post = DB::table('posts')->where('id' , $request->id)->first();
           return redirect()->route('post.indexPostsDB')->with('post_updated',$post->title .  '\'s Post has been Updated' );
       }

       return redirect()->route('post.indexPostsDB');
    }

    public function deletePostDB($id)
    {
        DB::table('posts')->where('id', $id)->delete();

        return redirect()->route('post.indexPostsDB')->with('post_deleted','Post Has been Deleted');
    }

}
