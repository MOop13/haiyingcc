<?php

namespace App\Http\Controllers\REST;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Comment;

class CommentsController extends Controller
{
    public function show($article_id){
        $commentList = Comment::getCommentList($article_id);
        return $this->rest_success($commentList); 
    }

    public function store(Request $request)
    {
        $article_id = trim($request->input('id'));
        $comment = trim($request->input('comment'));
        $email = trim($request->input('email'));
        $nickname = trim($request->input('nickname'));
        $data = [
            'article_id' => $article_id,
            'guest_comment' => $comment,
            'guest_name' => $nickname,
            'guest_email' => $email,
        ];
        $commentList = Comment::addComment($data);
        return $this->rest_success($commentList); 
    }

    public function delete($id, Request $request){
        $comment_id = intval($request->input('comment_id'));
        $data = array('id' => $comment_id, 'article_id' => $id);
        $result = Comment::delComment($data)? '删除成功' : '资源不存在' ;
        return $this->rest_success($result); 
    }

}
