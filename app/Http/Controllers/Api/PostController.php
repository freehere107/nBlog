<?php

namespace App\Http\Controllers\Api;

use App\Model\Post;
use App\Model\User;
use Illuminate\Http\Request;
use Auth;
use GrahamCampbell\Markdown\Facades\Markdown;

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
        foreach ($list as $k => $v) {
            $list[$k]['content'] = Markdown::convertToHtml($v['content']);
        }
        return response()->json($list);
    }


    public function publish(Request $request)
    {
        $userID = trim($request->input('userID'));
        $content = trim($request->input('content'));
        $title = trim($request->input('title'));
        $user = $this->currentUser;
        if (empty($user)) {
            return response()->json(['errorCode' => -1]);
        } else {
            $post = new Post([
                'title' => $title,
                'content' => $content
            ]);
            $user->posts()->save($post);
            return response()->json(['errorCode' => 0]);
        }
    }
}
