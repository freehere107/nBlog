<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Model\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        print_r($posts);
    }
}
