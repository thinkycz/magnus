<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        $articles = $category->articles()->latest()->paginate();

        return view('category', compact('category', 'articles'));
    }
}
