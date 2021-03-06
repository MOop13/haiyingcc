<?php

namespace App\Http\Controllers\REST;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Cons\RestCode;

class ArticleController extends Controller
{

   public function index()
    {
        $articles = Article::all();
        return $this->rest_success($articles);
    }

    public function show($id){
        $article = Article::getOne($id);
        return $this->rest_success($article);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return $this->rest_success($article);
    }

    public function update(Request $request)
    {
        $article = new Article();
        $result = $article->updateArticle($request->all(), $id);
        return $this->rest_success($result);
    }

    public function delete(Article $article)
    {
        $article->delete();
        return $this->rest_success($article);
    }
}
