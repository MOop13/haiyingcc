<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function list(Request $request){
        $list = Article::list();
        //todo 
        //
        return $this->success($list);
    }
}
