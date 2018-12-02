<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){

        $articles = Article::latest()->paginate(10);
        return view('article.index',['articles' => $articles]);
    }

    public function create() {
        return view('article.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return view('article.store');
    }

    public function edit(Request $request, $id) {
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return view('article.update');
    }

    public function show(Request $request, $id){
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }

    public function delete(Request $request){
        Article::destroy($request->id);
        return view('article.delete');
    }
}
