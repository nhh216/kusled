@extends('UserSite.layouts.main.MainLayout', ['homepage'=>false])
@section('content')
    <!-- Main Container  -->
        <div id="products-page" class="container ">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="https://gtrvietnam.com/" itemprop="item"><i class="fa fa-home"></i> <span itemprop="name" style="display:none;">Trang chủ</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li property="itemListElement" typeof="ListItem" class="">
                        <a property="item" typeof="WebPage" href="https://gtrvietnam.com/san-pham"><span property="name">Sản phẩm</span></a>
                        <meta itemprop="position" content="2">
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="box_category_brand">
                <div class="col col-xs-2 col-sm-2">
                    <div class="content-box">
                        <div class="image-cat">
                            <span class=""></span>
                            <a href="https://gtrvietnam.com/san-pham/?brand=1"> <img src="./Sản phẩm_files/x-light-vuong(1).png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            </div>
        </div>
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
        <div class="row mt50 mb30">
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
                <div class="row">
                    <section id="my-menu" class="" style="display: block;">
                        <div class="bot-menu">
                            <div class="nav-menu" style="min-width: 230px;">
                        <span class="title long" style="font-size: 1.6rem;text-transform: uppercase;color: #fff;background-color: #d92b32;padding: 4px;text-align: center;width: 100%;display: block;">
                            Danh mục sản phẩm</span>
                                <ul class="my-ul ul-main">
                                    @foreach($categories as $category)
                                        <li class="li-main">
                                            <a href="{{ $category->slug }}" class="a-main makeup">
                                                <span>{{ $category->name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="layout"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </aside>


            <!--Right Part End -->
            <!--Middle Part Start-->
            <div id="content" class="col-md-9 col-sm-8">
                <div class="">
                    <div class="products-category" id="contentload_api">
                        <div class="products-list row nopadding-xs so-filter-gird grid">
                            @foreach($products as $product)
                                 <div data-href="{{ $product->slug }}"
                                 class="click_item_product product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="product-item-container item--static">
                                    <div class="left-block">
                                        <div class="product-image-container ">
                                            <a href="danh-sach-san-pham/{{ $product -> slug }}" target="_self">
                                                <img src="{{ $product -> images[0] -> link }}" class="img-2 img-responsive" alt="{{ $product -> name }}">
                                            </a>
                                        </div>

                                        <!--quickview-->
                                        <div class="so-quickview">
                                            <a class="btn-button quickview quickview_handler visible-lg"
                                               href="danh-sach-san-pham/{{ $product -> slug }}"
                                               title="Quick view" data-fancybox-type="iframe">
                                                <i class="fa fa-search"></i><span>Xem chi tiết</span>
                                            </a>
                                        </div>
                                        <!--end quickview-->
                                    </div>
                                    <div class="right-block">
                                        <h4 class="ellipsis_title" style="overflow-wrap: break-word;">
                                            <a href="danh-sach-san-pham/{{ $product -> slug }}" target="_self">
                                                {{ $product -> name }}
                                            </a>
                                        </h4>
                                        <p class="text-red big-small">(Lượt xem: 5.508)</p>
                                        <div class="price_on_list_product">
                                            <div class="price">
                                                <span class="price-new">{{ getSalePrice($product -> price, $product -> discount) }}</span>
                                                <br>
                                                <span class="price_old">{{ currency_format($product -> price) }}</span>
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
                                                <span class="text-red big-small">Đã bán 113</span>
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
                                    <ul class="pagination justify-content-center"> <li class="page-item active">
                                            <a class="custom-page-link page-link" href="https://gtrvietnam.com/san-pham">1</a></li><li class="page-item"><a class="custom-page-link page-link" href="https://gtrvietnam.com/san-pham?page=2">2</a></li><li class="page-item"><a class="custom-page-link page-link" href="https://gtrvietnam.com/san-pham?page=3">3</a></li><li class="page-item"><a class="custom-page-link page-link" href="https://gtrvietnam.com/san-pham?page=4">4</a></li><li class="page-item"><a class="custom-page-link page-link" href="https://gtrvietnam.com/san-pham?page=2"> Trang cuối </a></li></ul>
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
    <!-- //Main Container -->
@endsection
