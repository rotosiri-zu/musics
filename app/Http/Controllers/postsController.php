<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postsController extends Controller
{
    public function index() 
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->image = $request->image;
        $post->title = $request->title;
        $post->genre = $request->genre;
        $post->price = $request->price;
        $post->save();
        return redirect()->route('top');
    }

    public function show($post_id)
    {
        $post =Post::findOrFail($post_id);
        return view('posts.show', ['post' => $post]);
    }

    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update($post_id, Request $request)
    {
        $post =Post::findOrFail($post_id);
        $post->image = $request->image;
        $post->title = $request->title;
        $post->genre = $request->genre;
        $post->price = $request->price;
        $post->save();
        return redirect()->route('top');
    }

    public function destroy($post_id)
    {
        $post =Post::findOrFail($post_id);
        $post->delete();
        return redirect()->route('top');
    }    

}
