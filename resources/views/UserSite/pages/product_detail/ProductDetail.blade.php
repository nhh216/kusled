@extends('UserSite.layouts.main.MainLayout')
@section('content')
    <div id="wrapper" class="wrapper-fluid banners-effect-5">
        <div id="product-detail" class="main-container main-container-mobile">
            <div id="content">
                <div class="content-main-w">

                    <link rel="stylesheet" href="https://gtrvietnam.com/templates/default/public/js/lightgallery/lightgallery.min.css">
                    <link rel="stylesheet" href="https://gtrvietnam.com/templates/default/public/js/lightslider/lightslider.min.css">
                    <style>
                        .lg-outer{
                            top: 22vh;
                        }
                    </style>
                    <section class="product-page not-home">
                        <div class="main-container container">
                            <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="/" itemprop="item"><i class="fa fa-home"></i> <span itemprop="name" style="display:none;">Trang chủ</span></a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li property="itemListElement" typeof="ListItem" class="">
                                    <a property="item" typeof="WebPage" href="/san-pham"><span property="name">Sản phẩm</span></a>
                                    <meta itemprop="position" content="2">
                                </li>
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="https://gtrvietnam.com/phu-kien-do-den" itemprop="name">PHỤ KIỆN ĐỘ ĐÈN</a>
                                    <meta itemprop="position" content="6">
                                </li>
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="https://gtrvietnam.com/collections/chup-cao-su-gtr" itemprop="name">CHỤP CAO SU GTR</a>
                                    <meta itemprop="position" content="7">
                                </li>
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="https://gtrvietnam.com/products/chup-cao-su-gtr" itemprop="name">CHỤP CAO SU GTR</a>
                                </li>
                            </ul>

                            <div class="row">
                                <!--Middle Part Start-->
                                <div class="item-title col-md-12">
                                    <div class="title-product">
                                        <h1 style="font-size: 18px;color: #000;">CHỤP CAO SU GTR</h1>
                                    </div>
                                    <!-- Review ---->
                                    <div class="box-review form-group">
                                        <div id="ratings" style="display: inline-block; width: 146px; height: 24px; position: relative; cursor: default; user-select: none;">
                                            <div class="rate-base-layer" style="width: 100%; height: 24px; overflow: hidden; position: absolute; top: 0px; display: block; white-space: nowrap;"><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></div><div class="rate-select-layer" style="width: 100%; height: 24px; overflow: hidden; position: absolute; top: 0px; display: block; white-space: nowrap;"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div><div class="rate-hover-layer" style="width: 0%; height: 24px; overflow: hidden; position: absolute; top: 0px; display: none; white-space: nowrap;"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div></div>
                                        <input type="hidden" id="rate_value" value="5">
                                        <p>
                                            <span class="text-red">Lượt mua: 113</span>
                                            |
                                            <span class="text-red">Lượt xem: 5.512</span>
                                            |
                                            <span><i class="fa fa-truck"></i> Giao hàng toàn quốc</span>
                                        </p>
                                    </div>
                                </div>
                                <div id="content" class="col-md-12">

                                    <div class="product-view row">

                                        <div class="left-content-product">
                                            <div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
                                                <div class="box-image">
                                                    <div class="lSSlideOuter  noPager"><div class="lSSlideWrapper usingCss"><ul style="list-style-type: none; padding: 0px 0px 0%; width: 396px; transform: translate3d(0px, 0px, 0px); height: 396px;" id="imageGallery" class="lightSlider lSSlide">
                                                                <li data-thumb="/upload/images/800x800/2020/03/12/12-03-2020-1584008669-dsc03708_8d1f3680697f46afbdcfeed6b93dbfaf_1024x1024.jpg" data-src="/upload/images/800x800/2020/03/12/12-03-2020-1584008669-dsc03708_8d1f3680697f46afbdcfeed6b93dbfaf_1024x1024.jpg" class="lslide active" style="width: 396px; margin-right: 0px;">
                                                                    <a href="javascript:;" class="play_video">
                                                                        <i class="fa fa-play-circle"></i>
                                                                    </a>
                                                                    <img src="/upload/images/800x800/2020/03/12/12-03-2020-1584008669-dsc03708_8d1f3680697f46afbdcfeed6b93dbfaf_1024x1024.jpg" alt="" class="slide_img_play">
                                                                </li>
                                                            </ul><div class="lSAction" style="display: none;"><a class="lSPrev"></a><a class="lSNext"></a></div></div><ul class="lSPager lSGallery" style="margin-top: 5px; transition-duration: 400ms; width: 100.75px; transform: translate3d(0px, 0px, 0px);"></ul></div>
                                                </div>

                                            </div>

                                            <div class="content-product-right col-md-4 col-sm-12 col-xs-12">
                                                <div class="product-label form-group">
                                                    <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                                        <span class="price-new" itemprop="price">30.000 đ</span>
                                                        <span class="small price_old" style="padding: 3px;"></span>
                                                    </div>
                                                    <div class="stock"><span>Tình trạng:</span> <span class="status-stock">Còn hàng</span>
                                                    </div>
                                                </div>

                                                <div class="product-box-desc">
                                                    <div class="inner-box-desc">
                                                        <div class="brand"><span>Thương hiệu:</span><a href="#"></a></div>
                                                        <div class="model"><span>Mã sản phẩm:</span> </div>
                                                        <div class="model"><span>Bảo hành:</span> </div>




                                                    </div>
                                                </div>
                                                <div id="product">
                                                    <div id="box_type_list" data-type="">

                                                    </div>
                                                    <div class="form-group box-info-product">
                                                        <div class="option quantity">
                                                            <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                                                <label>Số lượng</label>
                                                                <input class="form-control" type="text" name="quantity" value="1">
                                                                <input type="hidden" name="product_id" id="product_id" value="4886">
                                                                <span class="input-group-addon product_quantity_down">−</span>
                                                                <span class="input-group-addon product_quantity_up">+</span>
                                                            </div>
                                                        </div>
                                                        <div class="cart">
                                                            <button class="button_dhngay btn btn-danger btn-lg " data-toggle="tooltip" title="" onclick="addTocardNologin(4886);" data-original-title="Đặt hàng không cần đăng nhập" style="margin-top: 0;"><i class="fa fa-cart-plus"></i>
                                                                Đặt Hàng Nhanh
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="tel:0369.87.87.87" class="btn btn-danger btn-lg " style="width: 100%;"><i class="fa fa-phone"></i> HOTLINE ĐẶT HÀNG: 0369.87.87.87</a>
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
                                    </div>
                                    <!-- Product Tabs -->
                                    <div class=" ">
                                        <div class="row">
                                            <div class="col-lg-10 col-sm-9 col-xs-12">
                                                <style>
                                                    .title_header_desc{
                                                        background: transparent;
                                                        color: #ff2d37;
                                                        border: 0;
                                                        border-radius: 0;
                                                        text-transform: uppercase;
                                                        font-weight: bold;
                                                        font-size: 16px;
                                                        margin-bottom: 10px;
                                                        transition: all 0.3s ease-in-out 0s;
                                                        -moz-transition: all 0.3s ease-in-out 0s;
                                                        -webkit-transition: all 0.3s ease-in-out 0s;
                                                    }
                                                    .title_header_desc:before {
                                                        background: #ff2d37;
                                                        content: "";
                                                        width: 8px;
                                                        height: 25px;
                                                        left: 0;
                                                        position: absolute;
                                                        top: 0;
                                                        transition: all 0.3s ease-in-out 0s;
                                                        -moz-transition: all 0.3s ease-in-out 0s;
                                                        -webkit-transition: all 0.3s ease-in-out 0s;
                                                        z-index: 999;
                                                    }
                                                </style>
                                                <div>
                                                    <p class="title_header_desc">Mô tả sản phẩm</p>
                                                </div>
                                                <div id="content-detail">
                                                    <p><span style="color:rgb(0, 0, 0)"><strong>Đặc tính sản phẩm Chụp cao su chống nước cho đèn ô tô, cao su chống bụi cho đèn xe hơi</strong>&nbsp;</span></p>

                                                    <p><img src="https://file.hstatic.net/1000369690/file/dsc03708_8d1f3680697f46afbdcfeed6b93dbfaf_1024x1024.jpg" style="margin: 0px; height: auto; width: 100%;"></p>

                                                    <p><img src="https://file.hstatic.net/1000369690/file/dsc03709_af21b9486f68430f97fa20a3e35a0db7_1024x1024.jpg" style="margin: 0px; height: auto; width: 100%;"></p>




                                                    <div class="clear"></div>
                                                </div>
                                                <div>
                                                    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop fb_iframe_widget_fluid" data-href="https://gtrvietnam.com/products/chup-cao-su-gtr" data-width="800" data-numposts="5" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1048369755256897&amp;container_width=396&amp;height=100&amp;href=https%3A%2F%2Fgtrvietnam.com%2Fproducts%2Fchup-cao-su-gtr&amp;locale=vi_VN&amp;mobile=true&amp;numposts=5&amp;sdk=joey&amp;version=v4.0&amp;width=" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 213px;"><iframe name="f3089ed280cd7fc" width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v4.0/plugins/comments.php?app_id=1048369755256897&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dff1ba63b47639%26domain%3Dgtrvietnam.com%26origin%3Dhttps%253A%252F%252Fgtrvietnam.com%252Ff87df074281d04%26relation%3Dparent.parent&amp;container_width=396&amp;height=100&amp;href=https%3A%2F%2Fgtrvietnam.com%2Fproducts%2Fchup-cao-su-gtr&amp;locale=vi_VN&amp;mobile=true&amp;numposts=5&amp;sdk=joey&amp;version=v4.0&amp;width=" style="border: none; visibility: visible; width: 100%; height: 213px;" class=""></iframe></span></div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-sm-12 col-xs-12" style="margin-top: 40px;">
                                                <div id="agency_content"><style>
                                                        .agency_list a:hover,.agency_list a:after,.agency_list a:focus{
                                                            text-decoration: none;
                                                        }
                                                    </style>
                                                    <div class="container" style="margin-top:6vh;">
                                                        <div id="content">

                                                            <div class="list-store-contact">
                                                                <div class="text-center">
                                                                    <h1 class="title_store_contact">
                                                                        HỆ THỐNG TRUNG TÂM BẢO HÀNH GTRVIETNAM
                                                                    </h1>
                                                                </div>
                                                                <div class="accordion" id="accordionContact">
                                                                    <div class="card">
                                                                        <div class="card-header" id="headingOne_23">
                                                                            <h2 class="mb-0 title_tab">
                                                                                <i class="fa fa-caret-right"></i> CHI NHÁNH MIỀN NAM
                                                                            </h2>
                                                                        </div>
                                                                        <div>
                                                                            <div class="card-body">
                                                                                <ul class="agency_list">
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('auto365-tru-so-chinh-sai-gon');">
                                                                                            <span>Sài Gòn</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('binhduong');">
                                                                                            <span>Bình Dương</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('binhphuoc');">
                                                                                            <span>Bình Phước</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('tayninh');">
                                                                                            <span>Tây Ninh</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('cantho');">
                                                                                            <span>Cần Thơ</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('vinhlong');">
                                                                                            <span>Vĩnh Long</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('tiengiang');">
                                                                                            <span>Tiền Giang</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('long-an');">
                                                                                            <span>Long An</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('baclieu');">
                                                                                            <span>Bạc Liêu</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('dong-nai');">
                                                                                            <span>Đồng Nai</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('vung-tau');">
                                                                                            <span>Bà Rịa - Vũng Tàu</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('an-giang');">
                                                                                            <span>An Giang</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('dong-thap');">
                                                                                            <span>Đồng Tháp</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('kien-giang');">
                                                                                            <span>Kiên Giang</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('ca-mau');">
                                                                                            <span>Cà Mau</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="card-header" id="headingOne_24">
                                                                            <h2 class="mb-0 title_tab">
                                                                                <i class="fa fa-caret-right"></i> CHI NHÁNH TÂY NGUYÊN
                                                                            </h2>
                                                                        </div>
                                                                        <div>
                                                                            <div class="card-body">
                                                                                <ul class="agency_list">
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('kontum');">
                                                                                            <span>Kontum</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('dak-nong');">
                                                                                            <span>Đắk Nông</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('buon-ma-thuot');">
                                                                                            <span>Buôn Ma Thuột</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('gia-lai');">
                                                                                            <span>Gia Lai</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('lamdong');">
                                                                                            <span>Lâm Đồng</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="card-header" id="headingOne_22">
                                                                            <h2 class="mb-0 title_tab">
                                                                                <i class="fa fa-caret-right"></i> CHI NHÁNH MIỀN TRUNG
                                                                            </h2>
                                                                        </div>
                                                                        <div>
                                                                            <div class="card-body">
                                                                                <ul class="agency_list">
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('binh-thuan');">
                                                                                            <span>Bình Thuận</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('quang-tri');">
                                                                                            <span>Quảng Trị</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('thua-thien-hue');">
                                                                                            <span>Thừa Thiên Huế</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('ninh-thuan');">
                                                                                            <span>Ninh Thuận</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('nghe-an');">
                                                                                            <span>Nghệ An</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('quang-nam');">
                                                                                            <span>Quảng Nam</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('phu-yen');">
                                                                                            <span>Phú Yên</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('binh-dinh');">
                                                                                            <span>Bình Định</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('quang-ngai');">
                                                                                            <span>Quảng Ngãi</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('quangbinh');">
                                                                                            <span>Quảng Bình</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('danang');">
                                                                                            <span>Đà Nẵng</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('hatinh');">
                                                                                            <span>Hà Tĩnh</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('nhatrang');">
                                                                                            <span>Nha Trang</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('quynhon');">
                                                                                            <span>Quy Nhơn</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('thanhoa');">
                                                                                            <span>Thanh Hóa</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="card-header" id="headingOne_21">
                                                                            <h2 class="mb-0 title_tab">
                                                                                <i class="fa fa-caret-right"></i> CHI NHÁNH MIỀN BẮC
                                                                            </h2>
                                                                        </div>
                                                                        <div>
                                                                            <div class="card-body">
                                                                                <ul class="agency_list">
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('hanoi');">
                                                                                            <span>Hà Nội</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('son-la');">
                                                                                            <span>Sơn La</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('tuyen-quang');">
                                                                                            <span>Tuyên Quang</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('cao-bang');">
                                                                                            <span>Cao Bằng</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('bac-giang');">
                                                                                            <span>Bắc Giang</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('ha-nam');">
                                                                                            <span>Hà Nam</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('hai-phong');">
                                                                                            <span>Hải Phòng</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('hung-yen');">
                                                                                            <span>Hưng Yên</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('nam-dinh');">
                                                                                            <span>Nam Định</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('thai-binh');">
                                                                                            <span>Thái Bình</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('ninh-binh');">
                                                                                            <span>Ninh Bình</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('hai-duong');">
                                                                                            <span>Hải Dương</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('bac-ninh');">
                                                                                            <span>Bắc Ninh</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('ha-giang');">
                                                                                            <span>Hà Giang</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('dien-bien');">
                                                                                            <span>Điện Biên</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('yenbai');">
                                                                                            <span>Yên Bái</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('laocai');">
                                                                                            <span>Lào Cai</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('phutho');">
                                                                                            <span>Phú Thọ</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('langson');">
                                                                                            <span>Lạng Sơn</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('quangninh');">
                                                                                            <span>Quảng Ninh</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('vinhphuc');">
                                                                                            <span>Vĩnh Phúc</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn-button" href="javascript:;" onclick="openListAgency('thainguyen');">
                                                                                            <span>Thái Nguyên</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Modal -->
                                                    <div class="modal fade" id="agencyModal" tabindex="-1" role="dialog" aria-labelledby="agencyModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" id="contentAgency">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //Product Tabs -->
                                </div>
                            </div>
                        </div>

                    </section>

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
            for (var i=0; i<imgDefer.length; i++) {
                if(imgDefer[i].getAttribute('data-src')) {
                    imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
                }
            }
            $(".category-desc img").css("width","100%");
            $(".category-desc img").css("height","auto");
        }
        window.onload = init;
    </script>
    <script>

        /*----------------------------------------*/
        /*  Category Menu
    /*----------------------------------------*/
        $('.rx-parent').on('click', function () {
            $('.rx-child').slideToggle();
            $(this).toggleClass('rx-change');
        });
        //    category heading
        $('.category-heading').on('click', function () {
            $('.category-menu-list').slideToggle(900);
        });
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
