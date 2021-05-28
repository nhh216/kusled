@extends('UserSite.layouts.main.MainLayout', ['homepage'=>false])
@section('content')
    <div class="main-container container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="/" itemprop="item"><i class="fa fa-home"></i> <span itemprop="name" style="display:none;">Trang chủ</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li property="itemListElement" typeof="ListItem" class="">
                        <a property="item" typeof="WebPage" href="/san-pham"><span property="name">Sản phẩm</span></a>
                        <meta itemprop="position" content="2">
                    </li>
                </ul>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="">--}}
{{--                    <h3 class="modtitle">--}}
{{--                        <span style="color: #000;font-weight: bold;font-size: 2.4rem;">{{ $category->name }}</span></h3>--}}
{{--                    <div>--}}
{{--                        <div class="category-desc"><div class="collapse_link">--}}
{{--                                <h3 dir="ltr">&nbsp;</h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="wap-listing-tabs categories-list grid categories_list_custom">
                    <div class="ltabs-items-container">
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <style>
            #my-menu .bot-menu .nav-menu ul.ul-main li.li-main:first-child .a-main.active {
                border-top-left-radius: 0px;
            }

            #my-menu .bot-menu .nav-menu ul.ul-main li.li-main a.a-main:after {
                width: 0;
            }

            @media (min-width: 992px) {
                .box_menu_and_product #column-left .sub-box {
                    min-height: 300px;
                }

                .box_menu_and_product #column-left.col-md-3 {
                    width: 22%;
                }

                .box_menu_and_product #content.col-md-9 {
                    width: 78%;
                }
            }
        </style>
        <div class="row mt30 mb30">
            <div class="col-md-12">
                <div class="article-description">
                    <div class="home-section-head">
                        <h2 class="section-title">
                            <span>THAM KHẢO SẢN PHẨM</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row box_menu_and_product">
            <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
                @include('UserSite.includes.SideBar')
            </aside>

            <!--Right Part End -->
            <!--Middle Part Start-->
            <div id="content" class="col-md-9 col-sm-8">
                <div class="">
                    <div class="products-category" id="contentload_api">
                        <div class="products-list row nopadding-xs so-filter-gird grid">
                            @foreach($products as $product)
                                <div data-href="{{ asset("/danh-sach-san-pham/") }}/{{ $product -> slug }}_{{ $product -> id }}"
                                     class="click_item_product product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container ">
                                            <a href="{{ asset("/danh-sach-san-pham/") }}/{{ $product -> slug }}_{{ $product -> id }}" target="_self">
                                                <img src="{{ isset($product -> images[0]) ? asset($product -> images[0] -> link) : ""}}"
                                                     class="img-2 img-responsive"
                                                     alt="{{ $product->name }}">
                                            </a>
                                        </div>

                                        <!--quickview-->
                                        <div class="so-quickview">
                                            <a class="btn-button quickview quickview_handler visible-lg"
                                               href="{{ asset("/danh-sach-san-pham/") }}/{{ $product -> slug }}_{{ $product -> id }}"
                                               title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Xem chi tiết</span></a>
                                        </div>
                                        <!--end quickview-->
                                    </div>
                                    <div class="right-block">
                                        <h4 class="ellipsis_title" style="overflow-wrap: break-word;">
                                            <a href="{{ asset("/danh-sach-san-pham/") }}/{{ $product -> slug }}_{{ $product -> id }}"
                                               target="_self">{{ $product -> name }}</a>
                                        </h4>
                                        <p class="text-red big-small">(Lượt xem: 6.790)</p>
                                        <div class="price_on_list_product">
                                            <div class="price">
                                                <span class="price-new">{{ getSalePrice($product->price, $product->discount) }}</span>

                                            </div>
                                        </div>
                                        <div class="list_rate_ship_on_list_product">
                                            <div class="text-left">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    </div>
                                                </div>
                                                <br>
                                                <span class="text-red big-small">Đã bán 97</span>
                                            </div>
                                            <div class="text-right">
                                                <span class="big-small"><i class="fa fa-truck"></i> Giao hàng <br>toàn quốc</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--// End Changed listings-->

                        <!-- Filters -->
                        <div class="product-filter product-filter-bottom filters-panel">
                            <div class="row">
                                <div class="col-sm-6 text-left"></div>
                                <div class="col-sm-6 text-right">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                        <!-- //end Filters -->

                    </div>
                </div>
            </div>
        </div>
        <!--Middle Part End-->
        <div class="col-sm-12">

        </div>
        <!--Middle Part End-->
    </div>
@endsection
