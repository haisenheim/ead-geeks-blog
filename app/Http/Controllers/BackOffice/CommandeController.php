<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    //
    public function index(){
        $commandes = Commande::all();
        return view('BackOffice.Commandes.index')->with(compact('commandes'));
    }

    public function create(){
        $produits = Produit::all();
        return view('BackOffice.Commandes.create')->with(compact('produits'));
    }

    public function store(Request $request){
       // dd($request->all());
        $article = Article::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'categorie_id'=>$request->categorie_id,
            'body'=>$request->body,
        ]);
        return redirect('/admin/articles');

    }

    public function enable($id){
        // dd($request->all());
        $article = Article::find($id);
        $article->active = 1;
        $article->save();
        return redirect()->back();
     }

    public function disable($id){
        // dd($request->all());
        $article = Article::find($id);
        $article->active = 0;
        $article->save();
        return redirect()->back();
    }

    public function save(Request $request){
       // dd($request->image);
        $data = $request->except('image');

        $file = $request->image;
        $ext = $file->getClientOriginalExtension();
		$arr_ext = ['png','jpg','gif','jpeg'];

		if (!file_exists(public_path('img/articles'))) {
			mkdir(public_path('img/articles'));
		}
		if(in_array($ext,$arr_ext)) {
			$name_with_extension = time() . '.' . $ext;
			if (file_exists(public_path('img/articles/') . $name_with_extension)) {
				unlink(public_path('img/articles/') . $name_with_extension);
			}

			$file->move(public_path('img/articles'), $name_with_extension);
            $data['image_uri'] = 'img/articles/'.$name_with_extension;
		}

        //dd($request->all());
        /*$article = Article::find($request->id);
        //dd($article);
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->body = $request->body;
        $article->save(); */
       /* Article::updateOrCreate(
            ['id'=>$request->id],
            [
                'title'=>$request->title,
                'subtitle'=>$request->subtitle,
                'body'=>$request->body,
                'active'=>1
                ]
        ); */

        if(isset($request->active)){
            $data['active'] = 1;
        }else{
            $data['active'] = 0;
        }
        Article::updateOrCreate(['id'=>$request->id],$data);
       // return redirect('/admin/articles');

        return redirect()->back();
    }

    public function edit($id){
        $article = Article::find($id);
        return view('BackOffice.Articles.edit')->with(compact('article'));

    }

    public function show($id){
        $article = Article::find($id);
        return view('BackOffice.Articles.show')->with(compact('article'));

    }
}
