@extends('UserSite.layouts.main.MainLayout',['homepage'=>true])
@section('title', 'KUS Việt Nam -  Led siêu sáng - Bi Led - Bi Laser - Đèn trợ sáng KUS Việt Nam')
@section('content')
    <!-- Begin Uren's Banner Area -->
    <div class="slider-banner">

        @include('UserSite.components.slider.Slider')

    </div>
    <!-- Uren's Banner Area End Here -->

    <div class="best-selling-product_area">
        <div class="container-fluid">
            <div class="section-title_area">
                <span></span>
                <h3>Sản phẩm bán chạy</h3>
            </div>
            <div class="row no-gutters">
                <div id="left-banner" class="col-lg-2 col-md-3 col-sm-12 col-xs-12">

                    @include('UserSite.components.banner.LeftBanner')

                </div>
                <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="row no-gutter">
                        @foreach($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 product-slide_item">
                                @include('UserSite.components.product.SingleProduct')
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Uren's Blog Area -->
    <div class="uren-blog_area bg--white_smoke" style="padding-top: 0; margin-top: 50px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12 col-sm-6 col-xs-6 mb30">
                    <div class="section-title_area">
                        <span>Tin tức</span>
                        <h3>TIN TỨC ĐỘ ĐÈN</h3>
                    </div>
                </div>
                @include('UserSite.components.article.SingleArticle')
            </div>
        </div>
    </div>
    <!-- Uren's Blog Area End Here -->
    <style>
        .footer-middle_area .footer-widgets_info .widgets-essential_stuff,
        .footer-middle_area, .footer-middle_area a {
            color: #fff;
        }

        .footer-middle_area .footer-widgets_info .widgets-essential_stuff > ul > li span {
            color: #ffffff;
            font-size: 16px;
        }
    </style>
@endsection
