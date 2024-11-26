<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function list()
    {
        $news = News::latest()->paginate(10);
        return view('frontend.pages.news.list', compact('news'));
    }

    public function detail()
    {
        return view('frontend.pages.news.detail');
    }
}
