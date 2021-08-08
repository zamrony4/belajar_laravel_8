<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts',[
            "title" => "Blogs",
            "posts" => Post::all()
        ]);
    }

    public function show($slug){
        return view('post',[
            "title" => "Blog Post",
            "posts" => Post::find($slug)
        ]);
    }
}
