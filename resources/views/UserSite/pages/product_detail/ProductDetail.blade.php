@extends('UserSite.layouts.main.MainLayout',['homepage'=>false])
@push('og_image')
    <meta property="og:image" content="{{ asset($images[0] -> link) }}">
    <meta property="og:title" content="KUS Việt Nam - {{ $product -> name }}"/>
@endpush
@section('content')

    <div id="wrapper" class="wrapper-fluid banners-effect-5">
        {{--        <div id="product-detail" class="main-container main-container-mobile">--}}

        <div id="product-detail" class="main-container">
            <div id="content">
                <div class="container">
                </div>
                <div class="content-main-w">


                    <section class="product-page not-home">
                        <div class="main-container container">
                            <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a href="{{ asset("/") }}" itemprop="item">
                                        <i class="fa fa-home"></i> <span itemprop="name"
                                                                         style="display:none;">Trang chủ</span></a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li property="itemListElement" typeof="ListItem" class="">
                                    <a property="item" typeof="WebPage" href="{{ asset("/danh-sach-san-pham/") }}"><span
                                            property="name">Danh sách sản phẩm</span></a>
                                    <meta itemprop="position" content="2">
                                </li>
                                <li property="itemListElement" typeof="ListItem" class="">
                                    <a property="item" typeof="WebPage" href="#"><span
                                            property="name">{{ $product -> name }}</span></a>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ul>
                            <div class="row">
                                <!--Middle Part Start-->
                                <div id="content" class="col-md-12 product-content-v2">
                                    <div class="product-view">
                                        <div>
                                            <div class=" left-content-product">
                                                <div class=" col-md-5 col-sm-12 col-xs-12">

                                                    @include('UserSite.pages.product_detail.ProductSLide2')

                                                </div>
                                                <div class="content-product-right col-md-4 col-sm-12 col-xs-12">
                                                    <div class="title-product">
                                                        <h1>{{ $product -> name }}</h1>
                                                    </div>
                                                    <!-- Review ---->
                                                    <div class="box-review form-group">
                                                        <div id="ratings"
                                                             style="width: 146px; height: 24px; position: relative; cursor: default; user-select: none;">
                                                            <div class="rate-base-layer"
                                                                 style="width: 100%; height: 24px; overflow: hidden; position: absolute; top: 0px; display: block; white-space: nowrap;">
                                                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                            </div>
                                                            <div class="rate-select-layer"
                                                                 style="width: 100%; height: 24px; overflow: hidden; position: absolute; top: 0px; display: block; white-space: nowrap;">
                                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                                            </div>
                                                            <div class="rate-hover-layer"
                                                                 style="width: 0%; height: 24px; overflow: hidden; position: absolute; top: 0px; display: none; white-space: nowrap;">
                                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="rate_value" value="5">
                                                        <span class="text-red">Lượt mua: 464</span>
                                                        |
                                                        <span class="text-red">Lượt xem: 4.233</span>
                                                        |
                                                        <span><i class="fa fa-truck"></i> Giao hàng toàn quốc</span>
                                                    </div>

                                                    <div class="product-label form-group">
                                                        <div class="product_page_price" itemprop="offerDetails"
                                                             itemscope=""
                                                             itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price">
                                        <span class="price-new"
                                              itemprop="price">{{ getSalePrice($product->price, $product->discount) }}</span>
                                    </span>
                                                            <span class="small price_old" style="padding: 3px;"></span>
                                                        </div>

                                                        <div class="stock"><span>Tình trạng:</span> <span
                                                                class="status-stock">Còn hàng</span>
                                                        </div>
                                                    </div>

                                                    <div class="product-box-desc">
                                                        <div class="inner-box-desc">
                                                            @foreach(json_decode($product->info) as $key => $info)
                                                                <div class="model">
                                                                    <span>{{ $info -> text }}:</span> {{ $info -> value }}
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div id="product">
                                                        <div id="box_type_list" data-type="">

                                                        </div>
                                                        {{--                                                            <div class="form-group box-info-product">--}}
                                                        {{--                                                                <div class="option quantity">--}}
                                                        {{--                                                                    <div class="input-group quantity-control" unselectable="on"--}}
                                                        {{--                                                                         style="-webkit-user-select: none;">--}}
                                                        {{--                                                                        <label>Số lượng</label>--}}
                                                        {{--                                                                        <input class="form-control" type="text" name="quantity"--}}
                                                        {{--                                                                               value="1">--}}
                                                        {{--                                                                        <input type="hidden" name="product_id" id="product_id"--}}
                                                        {{--                                                                               value="4949">--}}
                                                        {{--                                                                        <span--}}
                                                        {{--                                                                            class="input-group-addon product_quantity_down">−</span>--}}
                                                        {{--                                                                        <span--}}
                                                        {{--                                                                            class="input-group-addon product_quantity_up">+</span>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                            <div class="cart">--}}
                                                        {{--                                                <button class=" btn btn-danger btn-l" data-toggle="tooltip" title=""--}}
                                                        {{--                                                        onclick="addTocardNologin(4949);"--}}
                                                        {{--                                                        data-original-title="Đặt hàng không cần đăng nhập"--}}
                                                        {{--                                                        style="padding: 10px;padding-left: 30px;padding-right: 30px;"><i--}}
                                                        {{--                                                        class="fa fa-cart-plus"></i>--}}
                                                        {{--                                                    Đặt Hàng Nhanh--}}
                                                        {{--                                                </button>--}}
                                                        {{--                                            </div>--}}
                                                        {{--                                                            </div>--}}
                                                        <div class="form-group">
                                                            <a href="tel:{{ $footer->phone }}"
                                                               class="btn btn-danger btn-lg "
                                                               style="width: 100%;"><i class="fa fa-phone"></i> HOTLINE
                                                                ĐẶT
                                                                HÀNG: {{ $footer->phone }}</a>
                                                        </div>
                                                        <div class="form-group">

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3 col-sm-12 col-xs-12 col-margin1">
                                                <div class="typefooter-1">
                                                    <div class="block-services">
                                                        <div class="icon-service">
                                                            <div class="icon"><i class="pe-7s-door-lock">&nbsp;</i>
                                                            </div>
                                                            <div class="text">
                                                                <h6>Giá tốt nhất<br></h6>
                                                                <p class="no-margin">Cam kết giá tốt nhất cho Khách
                                                                    hàng</p>
                                                            </div>
                                                        </div>
                                                        <div class="icon-service">
                                                            <div class="icon"><i class="pe-7s-users">&nbsp;</i></div>
                                                            <div class="text">
                                                                <h6>Bảo hành</h6>
                                                                <p class="no-margin">Cam kết bảo hành chính hãng</p>
                                                            </div>
                                                        </div>
                                                        <div class="icon-service">
                                                            <div class="icon"><i class="pe-7s-refresh-2">&nbsp;</i>
                                                            </div>
                                                            <div class="text">
                                                                <h6>Chính sách đổi trả</h6>
                                                                <p class="no-margin">Đổi trả dễ dàng những Sản phẩm bị
                                                                    lỗi</p>
                                                            </div>
                                                        </div>
                                                        <div class="icon-service">
                                                            <div class="icon"><i class="pe-7s-car">&nbsp;</i></div>
                                                            <div class="text">
                                                                <h6>Giao hàng đảm bảo</h6>
                                                                <p class="no-margin">Giao hàng tại nhà</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Tabs -->
                                        <div class="producttab">
                                            <div class="tabsslider  vertical-tabs col-xs-12">
                                                <div class="tab-content col-lg-12 col-sm-12 col-xs-12">
                                                    <div id="tab-1" class="tab-pane fade active in">
                                                        <div id="content-detail" style="padding: 20px">
                                                            {!! $product->full_desc !!}
                                                        </div>
                                                    </div>
                                                    <!-- // TRUNG TAM BAO HANH -->
                                                </div>
                                            </div>
                                            <!-- // Product Tabs -->
                                        </div>
                                        <!-- //Product Tabs -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="container">
                </div>
            </div>
        </div>
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
    </div>
    <script async="">
        function init() {
            var imgDefer = document.getElementsByTagName('img');
            for (var i = 0; i < imgDefer.length; i++) {
                if (imgDefer[i].getAttribute('data-src')) {
                    imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
                }
            }
            $(".category-desc img").css("width", "100%");
            $(".category-desc img").css("height", "auto");
        }

        window.onload = init;
    </script>
    <script>

        /*----------------------------------------*/
        /*  Category Menu
    /*----------------------------------------*/
        // $('.rx-parent').on('click', function () {
        //     $('.rx-child').slideToggle();
        //     $(this).toggleClass('rx-change');
        // });
        //    category heading
        // $('.category-heading').on('click', function () {
        //     $('.category-menu-list').slideToggle(900);
        // });

        /*-- Category Menu Toggles --*/
        function categorySubMenuToggle() {
            var screenSize = $(window).width();
            if (screenSize <= 991) {
                $('#cate-toggle .right-menu > a').prepend('<i class="expand menu-expand"></i>');
                $('.category-menu .right-menu ul').slideUp();
            } else {
                $('.category-menu .right-menu > a i').remove();
                $('.category-menu .right-menu ul').slideDown();
            }
        }

        categorySubMenuToggle();
        $(window).resize(categorySubMenuToggle);

        /*-- Category Sub Menu --*/
        function categoryMenuHide() {
            var screenSize = $(window).width();
            if (screenSize <= 991) {
                $('.category-menu-list').hide();
            } else {
                $('.category-menu-list').show();
            }
        }

        categoryMenuHide();
        // $(window).resize(categoryMenuHide);
        $('.category-menu-hidden').find('.category-menu-list').hide();
        $('.category-menu-list').on('click', 'li a, li a .menu-expand', function (e) {
            var $a = $(this).hasClass('menu-expand') ? $(this).parent() : $(this);
            $(this).toggleClass('active');
            if ($a.parent().hasClass('right-menu')) {
                if ($a.attr('href') === '#' || $(this).hasClass('menu-expand')) {
                    if ($a.siblings('ul:visible').length > 0) $a.siblings('ul').slideUp();
                    else {
                        $(this).parents('li').siblings('li').find('ul:visible').slideUp();
                        $a.siblings('ul').slideDown();
                    }
                }
            }
            if ($(this).hasClass('menu-expand') || $a.attr('href') === '#') {
                e.preventDefault();
                return false;
            }
        });
    </script>
@endsection
