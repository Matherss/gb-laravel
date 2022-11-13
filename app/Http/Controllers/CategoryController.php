<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\News;


class CategoryController extends Controller
{
    public function index(Categories $category)
    {
        return view('categories.index', [
            'data' => $category->getCategories()
        ]);
    }

    public function show($id, Categories $category, News $news)
    {
        return view('news.index', [
            'news' => $category->getNewsByCategory($id, $news)
        ]);
    }
}