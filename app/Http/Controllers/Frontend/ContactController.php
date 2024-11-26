<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact($slug = null)
    {

        $product = null;

        if ($slug) {
            $product = Product::where('slug', $slug)->first();
        }

        return view('frontend.pages.contact', compact('product'));
    }
}
