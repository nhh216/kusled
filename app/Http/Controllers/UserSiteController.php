<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Post;
use App\Models\Product;

class UserSiteController extends Controller
{
    public function productsPage() {
        $categories = Category::where('type', Category::TYPE_PRODUCT)->get();
        $products = Product::with('images')->paginate(12);
        return view('./UserSite/pages/product/Products')->with([
            'categories' => $categories,
            'products'  => $products
        ]);
    }

    public function productDetail($slug, $id) {
        $product = Product::where('id', $id)->with('images')->get();
        $images = $product[0]->images;
        return view('./UserSite/pages/product_detail/ProductDetail')->with([
            'product' => $product[0],
            'images' => $images,
        ]);
    }

    public function postDetail($slug) {
        $post = Post::where('slug',$slug)->get();
        $categories = Category::where('type', Category::TYPE_POST)->get();
        return view('./UserSite/pages/post/post_detail/PostDetail')->with([
            'post' => $post[0],
            'categories' => $categories,
            ]
        );
    }


    public function categoryPage($slug, $id) {
        $categories = Category::where('type', Category::TYPE_PRODUCT)->get();
        $category = Category::where('id', (int) $id)->get();
        $products = Product::where('category_id', $id)->with('images')->paginate(12);
        return view('./UserSite/pages/category/Category')->with([
            'categories' => $categories,
            'category'   => $category[0],
            'products'   => $products
        ]);
    }


    public function postsPage() {
        $categories = Category::where('type', Category::TYPE_POST)->get();
        $posts = Post::paginate(12);
        return view('./UserSite/pages/post/AllPost')->with([
            'categories' => $categories,
            'posts'      => $posts
        ]);
    }
    public function categoryPostPage($slug,  $id) {
        $categories = Category::where('type', Category::TYPE_POST)->get();
        $category = Category::where('id',(int) $id)->get();
        $posts = Post::where('category_id', $id)->paginate(12);
        return view('./UserSite/pages/post/Posts')->with([
            'categories' => $categories,
            'category'   => $category[0],
            'posts'      => $posts,
        ]);
    }
}
