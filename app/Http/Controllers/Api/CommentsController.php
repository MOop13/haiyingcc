<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Comment;

class CommentsController extends Controller
{
    public function getComments(){
        $article_id = 1;
        $commentList = Comment::getList($article_id);

        return $this->success($commentList); 

    }
}
