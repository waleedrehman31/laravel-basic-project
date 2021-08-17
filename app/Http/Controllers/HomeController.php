<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $catagories = Category::all();
        $products = Product::with('category')->get();
        return view('index', compact('catagories', 'products'));
    }
}
