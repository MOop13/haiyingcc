<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = [
        'article_id',
        'user_id',
        'guest_comment',
        'guest_name',
        'guest_email',
        'created_at',
        'updated_at',
    ];

    public static function getCommentList($id){
        $result =  self::where('article_id', $id)->get();
        return $result;
    }

    public static function addComment($data){
        $result = self::insert($data);
        return $result;
    }

    public static function delComment($data){
        $result = false;
        $comment = self::find($data['id']);
        if($comment){
            $result = $comment->delete();
        }
        return $result;
    }

}
