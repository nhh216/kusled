<?php


namespace App\Http\Controllers;


class UserSiteController extends Controller
{
    public function productsPage() {
        return view('./UserSite/pages/product/Products');
    }

    public function productDetail() {
        return view('./UserSite/pages/product_detail/ProductDetail');
    }

    public function postsPage() {
        return view('./UserSite/pages/post/Posts');
    }

    public function postDetail() {
        return view('./UserSite/pages/post/post_detail/PostDetail');
    }
}
