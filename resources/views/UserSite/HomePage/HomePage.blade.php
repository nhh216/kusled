@extends('UserSite.layouts.main.MainLayout',['homepage'=>true])
@section('content')
    <header id="header" class="typeheader-5">
        {{--    <header id="header" class="header-main_area header-main_area-2 bg--black">--}}
        @include('UserSite.components.header.Header')
    </header>

    <!-- Begin Uren's Banner Area -->
    <div class="slider-banner" style="margin-top: 15px">

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
                <div class="col-xl-2 col-md-4 col-sm-4">

                    @include('UserSite.components.banner.LeftBanner')

                </div>
                <div class="col-xl-10 col-md-8 col-sm-8 col-xs-12">
                    <div class="row no-gutter">

                        @include('UserSite.components.product.SingleProduct')

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Uren's Brand Area -->
    <div class="uren-brand_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title_area">
                        <span>Những thương hiệu hàng đầu</span>
                        <h3>ĐỐI TÁC GTR VIỆT NAM</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-md-2 mb-3">
                    <div class="inner-slide">
                        <div class="single-product">
                            <a href="https://gtrvietnam.com/san-pham/?brand=1">
                                <img src="./gtrvn/xlight-logo-germany-.png" alt="#">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <div class="inner-slide">
                        <div class="single-product">
                            <a href="https://gtrvietnam.com/san-pham/?brand=2">
                                <img src="./gtrvn/tirtim2.png" alt="#">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <div class="inner-slide">
                        <div class="single-product">
                            <a href="https://gtrvietnam.com/san-pham/?brand=5">
                                <img src="./gtrvn/hennei.png" alt="#">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <div class="inner-slide">
                        <div class="single-product">
                            <a href="https://gtrvietnam.com/san-pham/?brand=22">
                                <img src="./gtrvn/osram việt nam.png" alt="#">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <div class="inner-slide">
                        <div class="single-product">
                            <a href="https://gtrvietnam.com/san-pham/?brand=3">
                                <img src="./gtrvn/gtr-ok.png" alt="#">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <div class="inner-slide">
                        <div class="single-product">
                            <a href="https://gtrvietnam.com/san-pham/?brand=21">
                                <img src="./gtrvn/titan-new.png" alt="#">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Uren's Brand Area End Here -->
    <!-- Begin Uren's Blog Area -->
    <div class="uren-blog_area bg--white_smoke" style="padding-top: 0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
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
