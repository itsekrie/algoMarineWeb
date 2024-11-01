<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $title = 'Articles';
        $articles =  Article::all();
        return view('Public.Article.index', compact('title',  'articles'));
    }

    public function show($slug){
        $articles = Article::where('slug',  $slug)->firstOrFail();
        return view('Public.Article.show', compact('articles'));
    }
}
