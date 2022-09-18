<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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


    public function saveWithImage(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_original_name = $image->getClientOriginalName();             //to get the name of the file with extension
//            $image_extension = $image->getClientOriginalExtension();
//            $image_name = pathinfo($image_original_name, PATHINFO_FILENAME);  // to get the name of the file without extension
            $image_name = time() . '_' . $image_original_name;
            $path = $image->move(public_path('Image') , $image_name);
            $path = $path->getPathname();
        }

        DB::table('products')->insert([
            'name' => $validate['name'],
            'description' => $validate['description'],
            'path' => $path,
        ]);

        return back()->with('image_uploaded','product with image has been uploaded successfully');
    }
}
