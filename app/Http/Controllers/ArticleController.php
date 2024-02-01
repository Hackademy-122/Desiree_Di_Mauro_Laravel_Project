<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        $articles = Article::all();
        return view('article_create', ["articles" => $articles]); // o compact('articles'); compatta gli articoli creandoti una variabile $articles con dei dati all interno
       }

       public function store(Request $request){
        // dd($request->img);
        // dd($request);
        //query builder
        //utilizzre Eloquent. usiamo i modelli x dire a laravel come sono fatti gli oggetti che andiamo ad utilizzare el nostro db

        //* Come si salvano i dati nel database
        // $article = new Article();
        // $article->name = $request->imput('name');
        // $article->price = $request->price;
        // $article->brand = $request->brand;
        // $article->save();

        // Mass Assignment.. METODO CONSIGLIATO
        $article = Article::create([
            'name'=> $request->name,
            'price'=> $request->price,
            'brand' => $request->brand,
        ]);
        // dd('evviva');

        return redirect(route('article_create'))->with('message', 'Articolo Trovato');
    }
}
