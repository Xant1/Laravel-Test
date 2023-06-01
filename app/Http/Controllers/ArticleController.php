<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('show', compact('article'));
    }

    public function addComment(Request $request, $id)
    {
        $article = Article::find($id);

        $comment = new Comment();
        $comment->userName = $request->input('userName');
        $comment->userSurname = $request->input('userSurname');
        $comment->comment = $request->input('comment');
        
        $comment->article_id = $article->id;
        $comment->save();

        return redirect()->back()->with('success');
    }
        
}
