<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;

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
    public function show($id)
    {   
        $post = Post::find($id);
        $post = Post::findOrFail($id);
        
        return view('posts-folder.show', compact('post'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate($this->validate);
        //dd($data);
        
        $post = new Post();

      
        
         $post->fill($data);         
         $result = $post->save();

         if($result && !empty($data['tags'])){
             $post->tags()->attach($data['tags']);
             
         }
        
        

        $lastPost = Post::orderBy('id', 'DESC')->first();
        return redirect()->route('post.show', $lastPost );

    }
    public function create()
    {
        $tags = Tag::all();
        return view('posts-folder.create', compact('tags'));
    }
    public function destroy(Post $post)
    {      
      dd($post);
      $post->delete();
      return redirect()->route('post.index')->with('message', 'Post  eliminato correttamente!')->with('class', 'alert-success');
    }
}
