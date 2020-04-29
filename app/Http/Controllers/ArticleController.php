<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            if ($request->route('article')->is_private && auth()->guest()) {
                return redirect()->route('login');
            }

            return $next($request);
        });
    }

    public function __invoke(Article $article)
    {
        return view('article', compact('article'));
    }
}
