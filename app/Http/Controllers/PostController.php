<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    private $validate = [
        'title' => 'required|string|max:150',
        'subtitle' => 'required|string',
        'publication_date' => 'required|date'
    ];
    public function index(){
        $post = Post::all();
        //dd($post);
        return view('home', compact('post'));
    }
    public function show(Post $post)
    {   

      return view('posts-folder.show', compact('post'));
    }
}
