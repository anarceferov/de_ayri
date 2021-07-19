<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    public function index(){
        $articles = Article::where('status' , 1)->orderBy( 'created_at' , 'DESC' )->paginate(3); // ''DESC'' en son paylasilan melumati en birinci gosterir 'ASC' ise en birinci paylasilan melumati en sonda gosterir 'siralamada' // 'Article' Article modelini gosterir
        
        return view('front.blog' , compact('articles'));
    }
}
