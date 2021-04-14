<?php

namespace App\Http\Controllers;

use App\Models\ImageConfig;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomePageController extends Controller
{
    public function index() {
        $imageConfig = ImageConfig::all();
        $logo = $imageConfig->where('type', ImageConfig::TYPE_LOGO)->first();
        $banner = $imageConfig->where('type', ImageConfig::TYPE_BANNER)->first();
        $sliders = $imageConfig->where('type', ImageConfig::TYPE_SLIDER);
        $products = Product::with('images')->get();
        return view('./UserSite/HomePage/HomePage')->with([
            'logo'      => $logo,
            'banner'    => $banner,
            'sliders'   => $sliders,
            'products'  => $products
        ]);
    }
}
