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

    public function detail($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();

        $relatedNews = News::where('id', '!=', $news->id)->limit(5)->get();

        // $news->view += 1;
        // $news->save();
        $news->increment('view');
        
        return view('frontend.pages.news.detail', compact('news', 'relatedNews'));
    }
}
