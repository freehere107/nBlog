<?php

namespace App\Http\Controllers\Api;

use App\Model\Post;
use App\Model\User;
use Illuminate\Http\Request;
use Auth;

class PostController extends ApiBaseController
{

    public function list(Request $request)
    {
        $type = trim($request->input('type'));
        $list = Post::where('status', 1)->orderBy('id', 'desc');
        if ($type != 'all') {
            $list = $list->take(10);
        }
        $list = $list->get();
        return response()->json($list);
    }


    public function publishContent(Request $request)
    {
        $userID = trim($request->input('userID'));
        $content = trim($request->input('content'));
        $title = trim($request->input('title'));
        if (empty($userID) && Auth::check()) {
            return response()->json(['errorCode' => -1]);
        } else {
            $userID = (empty($userID)) ? Auth::id() : $userID;
            $user = User::find($userID);
            $post = new Post([
                'title' => $title,
                'content' => $content
            ]);
            $user->posts()->save($post);
            return response()->json(['errorCode' => 0]);
        }
    }
}
