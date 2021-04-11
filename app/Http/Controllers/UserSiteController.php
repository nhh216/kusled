<?php


namespace App\Http\Controllers;


use App\Models\Category;
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

    public function productDetail($slug) {
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

    public function postDetail() {
        return view('./UserSite/pages/post/post_detail/PostDetail');
    }
}
