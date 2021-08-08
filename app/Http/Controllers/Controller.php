<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FooterConfig;
use App\Models\ImageConfig;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct() {
        $imageConfig = ImageConfig::all();
        $logo = $imageConfig->where('type', ImageConfig::TYPE_LOGO)->first();
        $banner = $imageConfig->where('type', ImageConfig::TYPE_BANNER)->first();
        $sliders = $imageConfig->where('type', ImageConfig::TYPE_SLIDER);
        $products = Product::with('images')->limit(8)->get();
        $footer = FooterConfig::all()->first();
        View::share ( 'logo', $logo );
        View::share ( 'banner', $banner );
        View::share ( 'sliders', $sliders );
        View::share ( 'products', $products );
        View::share ( 'footer', $footer );
    }
}
