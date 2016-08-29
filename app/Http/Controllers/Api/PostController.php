<?php

namespace App\Http\Controllers\Api;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function list(Request $request)
    {
        $type = trim($request->input('type'));
        if ($type == 'all') {

        }
        $list = Post::where('status', 1)->orderBy('id', 'desc')->get();
        return response()->json($list);
    }
}
