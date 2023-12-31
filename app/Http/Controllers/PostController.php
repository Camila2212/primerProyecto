<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
      
        $posts= Post::get();
        return view('posts.index',['posts' => $posts ]);  
        // $posts = DB::table('posts')->get();
    }

    public function show(Post $post){
        return view('posts.show', ['post' =>$post]);
        
    }

    public function create(Post $post){
        
        return view('posts.create', ['post' =>$post]);
    }

    public function store(Request $request){

    
        $validated = $request->validate([
            'title' => ['required','min:5'],
            'body' => ['required']
        ]);
       
        Post::create($validated);
        session()->flash('mensaje', 'Post created!');

        return to_route('posts.index');
    }

    public function edit(Post $post){

        return view('posts.edit', ['post' =>$post]);
    }

    public function update(Request $request,Post $post){

        
        $request->validate([
            'title' => ['required','min:5'],
            'body' => ['required']
        ]);
  
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        $post->update([
            'title'=> $request->input('title'),
            'body'=> $request->input('body')

        ]);

        session()->flash('mensaje', 'Post updated!');

        return to_route('posts.index');
    }
}
