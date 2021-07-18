<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomePageController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('./UserSite/HomePage/HomePage')->with('posts', $posts);
    }
}
