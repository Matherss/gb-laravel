<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(News $news)
    {
        return view('news.index')->with('news', $news->getNews());
    }

    public function show(int $id, News $news)
    {
        return view('news.show', [
            'news' => $news->getNewsById($id)
        ]);
    }
    public function add()
    {
        return view('news.add');
    }
}