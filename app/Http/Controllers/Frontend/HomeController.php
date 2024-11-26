<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Models\Product;
use App\Models\Introduction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        $products = Product::latest()->take(8)->get();

        $introduction = Introduction::whereDate('release_date', '<=', Carbon::today())
            ->orderByDesc('release_date')
            ->first();

            $news = News::latest()->take(3)->get();

        return view('frontend.pages.home', compact('products', 'introduction', 'news'));
    }
}
