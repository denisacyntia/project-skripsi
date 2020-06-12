<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class FrontController extends Controller
{
    //
    public function article(){
        $articles = Article::orderBy('created_at', 'DESC');
        if (request()->q != '') {
            $articles = $articles->where('name', 'LIKE', '%' . request()->q . '%');
        }
        $articles = $articles->paginate(3);
        return view('article', compact('articles'));
    }
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        return view('article-single', compact('article'));
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $article = Article::where('name', 'like', "%",$cari, "%")->paginate();

        return view('article',compact('article'));
    }
}
