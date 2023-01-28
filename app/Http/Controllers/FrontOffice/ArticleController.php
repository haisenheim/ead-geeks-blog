<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){

        $articles = Article::where('active',1)->get();
        
        return view('FrontOffice.Articles.index')->with(compact('articles'));

    }
}
