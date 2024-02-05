<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

public function index(){

    $articles = Article::all();
    return view('article.index', compact('articles'));
}

    public function create(){

        $categories= Category::all();

       // $articles = Article::all();
        return view('article.create', compact('categories')); // o compact('articles'); compatta gli articoli creandoti una variabile $articles con dei dati all interno
       }

       public function store(ArticleRequest $request){
        // dd($request->img);
        //  dd($request->all());
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
            'user_id' => Auth::user()->id,
            'img' => $request->file('img')->store('public/img'),
        ]);
        // dd('evviva');
     
        $article->categories()->attach($request->category);

        foreach ($request->categories as $category){
            $article->categories()->attach($category);
        }

        return redirect(route('article_index'))->with('message', 'Articolo Creato');
    }

    public function show(Article $article){
        return view('article.show', compact('article'));
    }

    public function edit(Article $article){
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, Article $article){
       
        $article->update([
            'name' => $request->name,
            'price' => $request->price,
            'brand' => $request->brand,
            'img' => $request->img ? $request->file('img')->store('public/img') : $article->img,
            // il ternario è un if/else contratto e si scrive cosi condizione ? valore 1 : valore 2
        ]);

        return redirect(route('article_index'))->with('message', 'Articolo modificato con successo!');
    }

    public function destroy(Article $article){
        
    foreach ($article->categories as $category) {
    $category->articles()->detach($article->id);
}
        $article->delete();

        return redirect()->route('article_index')->with('message2', 'Articolo cancellato');
    }
}
