<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class HomePageController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('./UserSite/HomePage/HomePage')->with('posts', $posts);
    }
}
