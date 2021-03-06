<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Image;
use App\Comment;

// use Carbon\Carbon;

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
        /* 
        $now = new Carbon();
        dump($now->toDateTimeString());
        $nowPlus = Carbon::now();
        dump($nowPlus->toDateTimeString());
        */
        $post = Post::find($id);
        $post = Post::findOrFail($id);
        //dd($post); 
        
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

         if($result && !empty($data['images'])){
            $post->images()->attach($data['images']);
            
        }
        
        

        $lastPost = Post::orderBy('id', 'DESC')->first();
        return redirect()->route('post.show', $lastPost );

    }
    public function create()
    {
        $tags = Tag::all();
        $images = Image::all();
        return view('posts-folder.create', compact('tags', 'images'));
    }
    public function destroy(Post $post)
    {      
        //dd($post);
        $post->delete();
        return redirect()->route('post.index')->with('message', 'Post  eliminato correttamente!')->with('class', 'alert-success');
    }
    public function edit(Post $post)
    {
        $tags = Tag::all();
        return view('posts-folder.edit', compact('post','tags'));
    }
    public function update(Request $request, Post $post)
    {
      
      //dd($request->all());
      $data = $request->all();
      $request->validate($this->validate);


      $post->update($data);

      return redirect()->route('post.index')->with('message', 'Post aggiornato correttamente!')->with('class', 'alert-success');
    }
    public function addComment(Request $request, $id){
        $data = $request->all();
        $data['post_id'] = $id;

        $newComment = new Comment();
        $newComment->fill($data);

        // dd($data);
        
        $newComment->save();
        return redirect()->back();
    }
}
