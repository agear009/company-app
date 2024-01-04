<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import model post
use App\Models\Post;
//return type view
use Illuminate\View\View;


class PostController extends Controller
{
    public function index(): View{
    //get post
    $posts = Post::latest()->paginate(5);

    //render view with posts
    return view('posts.index', compact('posts'));
    }
}


