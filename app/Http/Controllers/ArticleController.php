<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    function show($articleID)
    {
        $article=Article::find($articleID);
        return view('articles.show',['article'=>$article]);
    }
    function index()
    {
        $article=Article::latest('updated_at')->get();
        return view('articles.index',['articles'=>$article]);
    }
}
