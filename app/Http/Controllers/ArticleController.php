<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke(Article $article)
    {
        return view('article', compact('article'));
    }
}
