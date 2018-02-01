<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // 分类
    protected $table = 'tb_category';
    protected $fillable = [
        'name',
        'type',
        'created_at',
        'updated_at',
    ];

    public static function getList(){
        $result = self::get();

        return $result;
    }
    
    public static function getOne($id){
        $result = self::find($id);

        return $result;
    }
}
