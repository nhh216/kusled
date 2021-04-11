<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::all();
        $products = Product::all();
        $posts = Post::all();
        $brands = Brand::all();
        return view('./admin/layout/index', compact(
            'categories',
            'products',
            'posts',
            'brands',
        ));
    }
}
