<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomePageController extends Controller
{
    public function index() {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(6);
        return view('./UserSite/HomePage/HomePage')->with('posts', $posts);
    }
}
