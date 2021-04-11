@extends('UserSite.layouts.main.MainLayout')
@section('content')
    <div class="content-main-w">
        <link rel="stylesheet"
              href="https://gtrvietnam.com/templates/default/public/js/lightgallery/lightgallery.min.css">
        <link rel="stylesheet"
              href="https://gtrvietnam.com/templates/default/public/js/lightslider/lightslider.min.css">

        <section class="product-page not-home">
            <div class="main-container container">
                <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="/"
                                                                                                         itemprop="item"><i
                                class="fa fa-home"></i> <span itemprop="name" style="display:none;">Trang chủ</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li property="itemListElement" typeof="ListItem" class="">
                        <a property="item" typeof="WebPage" href="/san-pham"><span property="name">Sản phẩm</span></a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a
                            href="https://gtrvietnam.com/nang-cap-anh-sang" itemprop="name">NÂNG CẤP ÁNH SÁNG </a>
                        <meta itemprop="position" content="6">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a
                            href="https://gtrvietnam.com/collections/led-led-bar" itemprop="name">LED - LED BAR</a>
                        <meta itemprop="position" content="7">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a
                            href="https://gtrvietnam.com/led-x-light-t10" itemprop="name">LED X-Light T10</a>
                    </li>
                </ul>
                <div class="row">
                    <!--Middle Part Start-->
                    <div id="content" class="col-md-12">
                        <div class="product-view row">
                            <div class="left-content-product">
                                <div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
                                    <div class="box-image">
                                        <div class="lSSlideOuter ">
                                            <div class="lSSlideWrapper usingCss">
                                                <ul style="list-style-type: none; padding: 0px 0px 0%; width: 2350px; transform: translate3d(-470px, 0px, 0px); height: 470px;"
                                                    id="imageGallery" class="lightSlider lSSlide">
                                                    @foreach($images as $image)
                                                        <li data-thumb="{{ asset($image -> link) }}"
                                                            data-src="{{ asset($image -> link) }}"
                                                            class="clone left" style="width: 470px; margin-right: 0px;">
                                                            <a href="javascript:;" class="play_video">
                                                                <i class="fa fa-play-circle"></i>
                                                            </a>
                                                            <img
                                                                src="{{ asset($image -> link) }}"
                                                                alt="" class="slide_img_play">
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div>
                                            </div>
                                            <ul class="lSPager lSGallery"
                                                style="margin-top: 5px; transition-duration: 400ms; width: 356.75px; transform: translate3d(0px, 0px, 0px);">
                                                @foreach($images as $key => $image)
                                                    @if($key > 0)
                                                        <li style="width:100%;width:113.75px;margin-right:5px" class="active">
                                                            <a href="#"><img
                                                                    src="{{ asset($image -> link) }}"></a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

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
                                        <div class="product_page_price" itemprop="offerDetails" itemscope=""
                                             itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price">
                                        <span class="price-new" itemprop="price">{{ getSalePrice($product->price, $product->discount) }}</span>
                                    </span>
                                            <span class="small price_old" style="padding: 3px;"></span>
                                        </div>

                                        <div class="stock"><span>Tình trạng:</span> <span
                                                class="status-stock">Còn hàng</span>
                                        </div>
                                    </div>

                                    <div class="product-box-desc">
                                        <div class="inner-box-desc">
                                            <div class="brand "><span>Thương hiệu:</span><a href="#">X-Light</a></div>
                                            <div class="model "><span>Mã sản phẩm:</span> x-light-t10</div>
                                            <div class="model "><span>Bảo hành:</span></div>

                                            <div class="model"><span>Năm sản xuất:</span> 2021</div>


                                        </div>
                                    </div>
                                    <div id="product">
                                        <div id="box_type_list" data-type="">

                                        </div>
                                        <div class="form-group box-info-product">
                                            <div class="option quantity">
                                                <div class="input-group quantity-control" unselectable="on"
                                                     style="-webkit-user-select: none;">
                                                    <label>Số lượng</label>
                                                    <input class="form-control" type="text" name="quantity" value="1">
                                                    <input type="hidden" name="product_id" id="product_id" value="4949">
                                                    <span class="input-group-addon product_quantity_down">−</span>
                                                    <span class="input-group-addon product_quantity_up">+</span>
                                                </div>
                                            </div>
                                            {{--                                            <div class="cart">--}}
                                            {{--                                                <button class=" btn btn-danger btn-l" data-toggle="tooltip" title=""--}}
                                            {{--                                                        onclick="addTocardNologin(4949);"--}}
                                            {{--                                                        data-original-title="Đặt hàng không cần đăng nhập"--}}
                                            {{--                                                        style="padding: 10px;padding-left: 30px;padding-right: 30px;"><i--}}
                                            {{--                                                        class="fa fa-cart-plus"></i>--}}
                                            {{--                                                    Đặt Hàng Nhanh--}}
                                            {{--                                                </button>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                        <div class="form-group">
                                            <a href="tel:0369.87.87.87" class="btn btn-danger btn-lg "
                                               style="width: 100%;"><i class="fa fa-phone"></i> HOTLINE ĐẶT HÀNG:
                                                0369.87.87.87</a>
                                        </div>
                                        <div class="form-group">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 col-margin1">
                                    <div class="typefooter-1">
                                        <div class="block-services">
                                            <div class="icon-service">
                                                <div class="icon"><i class="pe-7s-door-lock">&nbsp;</i></div>
                                                <div class="text">
                                                    <h6>Giá tốt nhất<br></h6>
                                                    <p class="no-margin">Cam kết giá tốt nhất cho Khách hàng</p>
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
                                                <div class="icon"><i class="pe-7s-refresh-2">&nbsp;</i></div>
                                                <div class="text">
                                                    <h6>Chính sách đổi trả</h6>
                                                    <p class="no-margin">Đổi trả dễ dàng những Sản phẩm bị lỗi</p>
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
                            <div class="producttab ">
                                <div class="tabsslider  vertical-tabs col-xs-12">
                                    <div class="tab-content col-lg-12 col-sm-12 col-xs-12">
                                        <div id="tab-1" class="tab-pane fade active in">
                                            <div id="content-detail" style="padding: 20px">
                                                {!! $product->full_desc !!}
                                            </div>
                                        </div>

                                        // TRUNG TAM BAO HANH

                                    </div>
                                </div>
                                <!-- // Product Tabs -->
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </div>
@endsection
