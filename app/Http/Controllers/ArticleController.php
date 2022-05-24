<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Auth;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all()->sortByDesc("updated_at");
        $user_id = Auth::id();
        return view('articles.index',['articles'=>$articles, 'user_id' => $user_id]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            ]);
        
        $newArticle = Article::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'langue' => 'fr',
            'user_id' => Auth::id(),
        ]); 


        return redirect('/articles');
    }


    
    public function edit(Article $id)
    {
        return view('articles.edit', ['article' => $id]);
    }

    
    public function update(Request $request, Article $id)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            ]);
            
        $id->update([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
        ]);
        return redirect('/articles');
    }

   
    public function destroy(Article $id)
    {
        $id->delete();
        return redirect('/articles');
    }
}
