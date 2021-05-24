<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Post;
use App\Models\Product;

class UserSiteController extends Controller
{
    public function productsPage() {
        $categories = Category::where('type', Category::TYPE_PRODUCT)->get();
        $products = Product::with('images')->get();
        return view('./UserSite/pages/product/Products')->with([
            'categories' => $categories,
            'products'  => $products
        ]);
    }

    public function productDetail($slug, $id) {
        $product = Product::where('slug', $slug)->with('images')->get();
        $images = $product[0]->images;
        return view('./UserSite/pages/product_detail/ProductDetail')->with([
            'product' => $product[0],
            'images' => $images,
        ]);
    }

    public function postsPage() {
        return view('./UserSite/pages/post/Posts');
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
        $category = Category::where('id', (int) $id)->with("products", function ($products) {
            $products->with('images');
        })->get();;
        $products = $category[0] -> products;
        return view('./UserSite/pages/category/Category')->with([
            'categories' => $categories,
            'category'   => $category[0],
            'products'   => $products
        ]);
    }

    public function categoryPostPage($slug) {
        $category = Category::where('slug',$slug)->first()->with("posts")->get();
        dd(Category::where('slug',$slug)->first()->with("posts")->get());
        $posts = $category[0] -> posts;
        return view('./UserSite/pages/category/Category')->with([
            'categories' => $categories,
            'category'   => $category[0],
            'posts'      => $posts
        ]);
    }
}
