<?php


namespace App\Http\Controllers;


class UserSiteController extends Controller
{
    public function productsPage() {
        return view('./UserSite/pages/products/Products');
    }

    public function productDetail() {
        return view('./UserSite/pages/product_detail/ProductDetail');
    }
}
