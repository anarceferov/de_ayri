<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{

    public function index(){

        $articles = Article::orderBy('created_at' , 'DESC')->get();

        Cache::put('articles', $articles , $seconds = 120);

        Cache::get('articles');

        return view('back.article.index' , compact('articles'));
    }


    public function create(){
        return view('back.article.create');
    }


    public function store(Request $request){

        $request->validate([
            'email' => 'regex:/^.+@.+$/i',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'content' => 'required|min:10'
        ]);

        $article = new Article;
        $article->title       = $request->title;
        $article->content     = $request->content;
        $article->slug        = Str::slug($request->title);

        if($request->hasFile('image')){
            $imageName=Str::slug($request->title).'.' .$request->image->Extension();
            $request->image->move(public_path('blog_img'),$imageName);
            $article->image='blog_img/'.$imageName; 
        }
        $article->save();
        toastr()->success('SUCCESS CREATE...');
        return redirect()->route('dashboard.articles.index');
    }


    public function show($id){
        
    }


    public function edit($id){
        
        $article=Article::findOrFail($id);
        return view('back.article.update', compact('article'));

    }


    public function update(Request $request, $id){
        
        $request->validate([
            'title' => 'min:3|required',
            'image' => 'image|mimes:jpeg,jpg,png',
            'content' => 'required|min:10'
        ]);
    
        $article=Article::findOrFail($id);
        $article->title       = $request->title;
        $article->content     = $request->content;
        $article->slug        = Str::slug($request->title);

        if($request->hasFile('image')){
            $imageName=Str::slug($request->title).'.' .$request->image->getClientOriginalExtension();
            $request->image->move(public_path('blog_img'),$imageName);
            $article->image='blog_img/'.$imageName; 
        }
        $article->save();
        toastr()->success('SUCCESS UPDATE...');
        return redirect()->route('dashboard.articles.index');

    }


    public function destroy($id){
        //
    }

    public function delete($id){
        Article::find($id)->delete();
        toastr()->success('SUCCESS DELETE...');
        return redirect()->back();  
    }


    public function recover($id){
        Article::onlyTrashed()->find($id)->restore();
        toastr()->success('SUCCESS...');
        return redirect()->route('dashboard.articles.index'); 
    } 


    public function hardDelete($id){
        $article=Article::onlyTrashed()->find($id);
        if(File::exists($article->image)){
            File::delete(public_path($article->image));
        }

        $article->forceDelete();
        toastr()->success('SUCCESS DELETE...');
        return redirect()->back();
    }

    public function trashed(){
        $articles=Article::onlyTrashed()->orderBy('deleted_at' , 'DESC')->get();
        return view('back.article.trashed', compact('articles'));
    } 

    public function switch(Request $request){
        $article=Article::findOrFail($request->id);
        $article->status=$request->statu == 'true' ? 1 : 0;
        $article->save();
    }
}

