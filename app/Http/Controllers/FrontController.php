<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class FrontController extends Controller
{
    //
    public function article(){
        $articles = Article::orderBy('created_at', 'DESC')->paginate(3);
        return view('article', compact('articles'));
    }
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        return view('article-single', compact('article'));
    }
}
