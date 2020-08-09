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

    public function store()
    {
        
    }
}
