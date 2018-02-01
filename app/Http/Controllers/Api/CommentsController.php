<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Comment;

class CommentsController extends Controller
{
    public function getComments(Request $request){
        $article_id = intval($request->input('article_id'));
        $commentList = Comment::getList($article_id);

        return $this->success($commentList); 

    }
}
