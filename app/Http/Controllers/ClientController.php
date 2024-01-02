<?php

namespace App\Http\Controllers;

use App\Models\{Art, Article};

class ClientController extends Controller
{
    public function home()
    {
        $arts = Art::latest()->take(15)->get();
        $articles = Article::latest()->take(3)->get();
        return view('index', compact('arts', 'articles'));
    }

    public function article(Article $article)
    {
        return view('article', compact('article'));
    }

    public function vitrine()
    {
        $artsQuery = Art::latest();

        if (request()->has('q')){
            $artsQuery->where('prompt', 'like', '%' . request('q') . '%');
        }

        $arts = $artsQuery->paginate(9);
        return view('vitrine', compact('arts'));
    }
}
