<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticlePageController extends Controller
{
    public function index($slug){
        $article  = Article::whereSlug( $slug )->first() ?? abort(404);; // 'Article' Article modelini gosterir // ''whereSlug'' ''Articles'' modelindeki 'slug' stununu gosterir
        $article->increment('hit'); 
        return view('front.article' , compact('article'));
    }
}
