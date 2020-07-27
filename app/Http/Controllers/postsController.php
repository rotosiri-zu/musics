<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class postsController extends Controller
{
    public function index() 
    {
        $posts = Post::orderBy('created_at', 'desc')->ger();
        return view('posts.index', ['posts' => $posts]);
    }
}
