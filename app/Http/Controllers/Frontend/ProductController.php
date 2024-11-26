<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function list()
    {
        $products = Product::when(request('sort_price'), function ($query) {
            return $query->orderBy('price', request('sort_price'));
        })->when(request('sort_date'), function ($query) {
            return $query->orderBy('created_at', request('sort_date'));
        })->when(request('keyword'), function ($query) {
            return $query->where('name', 'like', '%' . request('keyword') . '%');
        })
            ->paginate(12);

        return view('frontend.pages.product.list', compact('products'));
    }

    public function detail()
    {
        return view('frontend.pages.product.detail');
    }
}
