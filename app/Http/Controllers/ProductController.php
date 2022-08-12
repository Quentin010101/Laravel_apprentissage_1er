<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    
    public function index ()
    {
        $products = Product::inRandomOrder()->take(5)->get();

        $tags = Tag::all();


        return view('home', [
            'products' => $products,
            'tags' => $tags,
        ]);
    }

    public function showCategory($category)
    {
        $tags = Tag::where('tag' , '=', $category)->get();

        $products = Product::all();


        return view('category', [
            'products' => $products,
            'tags' => $tags,
        ]);
    }
}
