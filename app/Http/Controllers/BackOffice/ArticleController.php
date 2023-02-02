<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){
        $articles = Article::all();
        return view('BackOffice.Articles.index')->with(compact('articles'));
    }

    public function create(){
        return view('BackOffice.Articles.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $article = Article::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'body'=>$request->body,
        ]);
        return redirect('/admin/articles');

    }
}
