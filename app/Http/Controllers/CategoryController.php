<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Categories::getCategories();

        return view('categories.index', [
            'data' => $category
        ]);
    }

    public function show($id)
    {

        $category = Categories::getNewsByCategory($id);
        return view('news.index', [
            'news' => $category
        ]);
    }
}