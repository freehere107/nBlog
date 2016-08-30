<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Model\User;
use Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        print_r($posts);
    }

    public function create()
    {
        return view('blog.create')->with('userID', Auth::getUser()->id);
    }
}
