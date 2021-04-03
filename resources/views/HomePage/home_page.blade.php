<!DOCTYPE html>
<!-- saved from url=(0023)https://gtrvietnam.com/ -->
<html lang="en"
      class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
<head>
    @include('includes.TopScript')
</head>
<body class="template-color-1">
<div class="main-wrapper">
{{--    <header id="header" class="typeheader-5">--}}
{{--        <div class="header-middle hidden-compact">--}}
{{--            <div class="container">--}}
{{--                <div class="row sec_head_hotline" style="height: 40px;background-color: #272727;">--}}
{{--                    <div class="col-sm-6 col-xs-6">--}}
{{--                        <a href="tel:0369.87.87.87" style="color: #fff;"> Hotline: 0369.87.87.87</a>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-xs-6">--}}
{{--                        <a href="/lien-he-gtrvietnam" class="contact" style="color: #fff;">Liên hệ</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="logo-w col-lg-3 col-md-3 col-sm-4 col-xs-12">--}}
{{--                        <div class="logo">--}}
{{--                            <a href="/"><img src="./gtrvn/logo.webp" title="LOGO Auto365" alt="LOGO GTRVIETNAM"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 middle-right">--}}
{{--                        <div class="main-menu-w">--}}
{{--                            <div class="responsive so-megamenu megamenu-style-dev">--}}
{{--                                <nav class="navbar-default">--}}
{{--                                    <div class=" container-megamenu  horizontal open ">--}}
{{--                                        <div class="megamenu-wrapper so-megamenu-active">--}}
{{--                                            <span id="remove-megamenu" class="fa fa-times"></span>--}}
{{--                                            <div class="megamenu-pattern">--}}
{{--                                                <div class="container-mega">--}}
{{--                                                    <ul class="megamenu" data-transition="slide" data-animationtime="250">--}}
{{--                                                        <li>--}}
{{--                                                            <a href="/nang-cap-anh-sang" class="clearfix">--}}
{{--                                                                <strong>SHOP SẢN PHẨM</strong>--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="/phu-kien-do-den" class="clearfix">--}}
{{--                                                                <strong>PHỤ KIỆN ĐỘ ĐÈN</strong>--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="">--}}
{{--                                                            <a href="/bao-hanh-gtrvietnam" class="clearfix">--}}
{{--                                                                <strong>BẢO HÀNH</strong>--}}
{{--                                                            </a>--}}

{{--                                                        </li>--}}
{{--                                                        <li class="">--}}
{{--                                                            <a href="/tin-tuc" class="clearfix">--}}
{{--                                                                <strong>TIN TỨC</strong>--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}

{{--                                                        <li class="">--}}
{{--                                                            <a href="/lien-he-gtrvietnam" class="clearfix">--}}
{{--                                                                <strong>HỆ THỐNG CHI NHÁNH</strong>--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </header>--}}

    @include('layouts.header.Header')

    <style>
        .fixed_topmenu a, .fixed_topmenu button {
            color: #000;
        }

        .fixed_topmenu a:after, .fixed_topmenu a:focus {
            text-decoration: none;
        }
    </style>
    <div class="fixed_topmenu d-lg-none">
        <ul class="list_menu_footer">
            <li>
                <a href="javascript:;" id="show-megamenu-service" data-toggle="collapse" class="fixed_toggle_menu" style="color: #000;">
                    <i class="fa fa-bars" aria-hidden="true"></i> Menu
                </a>
            </li>
            <li>
                <a href="/san-pham" style="color: #000;"> <i class="fa fa-list" aria-hidden="true"></i>
                    Sản phẩm
                </a>

            </li>
            <li>
                <a href="/phu-kien-do-den" style="color: #000;">
                    <i class="fa fa-diamond fas fa-gem" aria-hidden="true"></i> Phụ kiện
                </a>

            </li>
            <li>
                <a href="/dat-hang-nhanh" style="color: #000;">
                    <i class="fa fa-cart-plus"></i>
                    <span>0</span> giỏ hàng
                </a>
            </li>
        </ul>
    </div>

<!-- Begin Uren's Banner Area -->
    <div class="slider-banner" style="margin-top: 15px">

        @include('components.slider.Slider')

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

                    @include('components.banner.LeftBanner')

                </div>
                <div class="col-xl-10 col-md-8 col-sm-8 col-xs-12">
                    <div class="row no-gutter">

                        @include('components.product.SingleProduct')

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
                @include('components.article.SingleArticle')
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
    <div class="uren-footer_area">

        <div class="footer-middle_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-widgets_info">
                            <div class="widget-short_desc">
                                <div class="footer-widgets_title">
                                    <h3>LIÊN HỆ GTRVIETNAM</h3>
                                </div>
                            </div>
                            <div class="widgets-essential_stuff">
                                <ul>
                                    <li><span class="ion-android-map"></span><a
                                            href="https://gtrvietnam.com/lien-he-gtrvietnam"> Tìm địa
                                            chỉ 333 trung tâm trên toàn quốc</a></li>
                                    <li><span class="ion-android-call"></span> <a href="tel:0369.87.87.87">
                                            0369.87.87.87</a></li>
                                    <li><span class="ion-email"></span><a href="mailto:gtrvietnam.com@gmail.com">
                                            gtrvietnam.com@gmail.com</a></li>
                                    <li><span class="ion-ios-alarm"></span> Làm việc từ thứ 2 - thứ 7(8h-17h)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="footer-widgets_area">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-widgets_title">
                                        <h3>THÔNG TIN CHUNG</h3>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>

                                            <li><a href="https://gtrvietnam.com/ve-chung-toi">Giới thiệu doanh
                                                    nghiệp</a></li>
                                            <li><a href="https://www.youtube.com/channel/UC_w2Lv-lcyMt0uKhqyuUFjw"
                                                   target="_blank">Youtube Official GTRVietnam</a></li>
                                            <li>
                                                <a href="https://www.google.com/maps/place/Auto365.vn/@10.8402808,106.7114748,17z/data=!3m1!4b1!4m5!3m4!1s0x31752903646fc6f9:0x2fc27ee6cb25153d!8m2!3d10.8402755!4d106.7136635"
                                                   target="_blank">Địa chỉ GTRVietnam</a></li>
                                            <li><a href="https://gtrvietnam.com/lien-he-gtrvietnam">Liên hệ - Góp ý</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-widgets_title">
                                        <h3>LIÊN KẾT NHANH</h3>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="https://gtrvietnam.com/search">Tìm kiếm</a></li>
                                            <li><a href="https://gtrvietnam.com/pages/about-us">Giới thiệu</a></li>
                                            <li><a href="https://gtrvietnam.com/pages/chinh-sach-doi-tra">Chính sách đổi
                                                    trả</a></li>
                                            <li><a href="https://gtrvietnam.com/pages/chinh-sach-bao-mat">Chính sách Bảo
                                                    mật</a></li>
                                            <li><a href="https://gtrvietnam.com/pages/dieu-khoan-dich-vu">Điều khoản
                                                    dịch vụ</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-widgets_title">
                                        <h3>DANH MỤC SẢN PHẨM</h3>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="https://gtrvietnam.com/nang-cap-anh-sang">NÂNG CẤP ÁNH
                                                    SÁNG </a></li>
                                            <li><a href="https://gtrvietnam.com/phu-kien-do-den">PHỤ KIỆN ĐỘ ĐÈN</a>
                                            </li>
                                            <li><a href="https://gtrvietnam.com/san-pham"> <i
                                                        class="fa fa-angle-double-right"></i>
                                                    Xem nhiều hơn</a></li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom_area">
            <div class="container-fluid">
                <div class="footer-bottom_nav">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright">
                                <span>Copyright © 2020 gtrvietnam.com All rights reserved. <a target="_blank"
                                                                                              href="http://stackgoo.com/thiet-ke-website-chuyen-nghiep">Thiết kế web STACKGOO.COM</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="payment">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Uren's Footer Area End Here -->
</div>

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('gtrvn/jquery-1.12.4.min.js') }}"></script>
<!-- Modernizer JS -->
<script src="{{ asset('gtrvn/modernizr-2.8.3.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('gtrvn/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('gtrvn/bootstrap.min.js') }}"></script>
<!-- Slick Slider JS -->
<script src="{{ asset('gtrvn/slick.min.js') }}"></script>
<!-- Barrating JS -->
<script src="{{ asset('gtrvn/jquery.barrating.min.js') }}"></script>
<!-- Counterup JS -->
<script src="{{ asset('gtrvn/jquery.counterup.js') }}"></script>
<!-- Nice Select JS -->
<script src="{{ asset('gtrvn/jquery.nice-select.js') }}"></script>
<!-- Sticky Sidebar JS -->
<script src="{{ asset('gtrvn/jquery.sticky-sidebar.min.js') }}"></script>
<!-- Jquery-ui JS -->
<script src="{{ asset('gtrvn/jquery-ui.min.js') }}"></script>
<script src="{{ asset('gtrvn/jquery.ui.touch-punch.min.js') }}"></script>
<!-- Lightgallery JS -->
<script src="{{ asset('gtrvn/lightgallery.min.js') }}"></script>
<!-- Scroll Top JS -->
<script src="{{ asset('gtrvn/scroll-top.js') }}"></script>
<!-- Theia Sticky Sidebar JS -->
<script src="{{ asset('gtrvn/theia-sticky-sidebar.min.js') }}"></script>
<!-- Waypoints JS -->
<script src="{{ asset('gtrvn/waypoints.min.js') }}"></script>
<!-- jQuery Zoom JS -->
<script src="{{ asset('gtrvn/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('gtrvn/dotdotdot.js') }}"></script>
<script src="{{ asset('js/megamenu.js') }}"></script>
<script src="{{ asset('gtrvn/main.js') }}"></script>
<script src="{{ asset('gtrvn/custom.js') }}"></script>

<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><iclass="fa fa-angle-double-up"></i></a>
<script>
    $('#slider').carousel({
        interval: 2000
    })
</script>
<script>
    window.addEventListener('load', function () {
        var allimages = document.getElementsByTagName('img');
        for (var i = 0; i < allimages.length; i++) {
            if (allimages[i].getAttribute('data-src')) {
                allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
            }
        }
    }, false);
</script>
<a id="scrollUp" href="https://gtrvietnam.com/#top" style="position: fixed; z-index: 2147483647; display: none;"><i
        class="fa fa-angle-double-up"></i></a>


{{--<script src="/code.php"></script>--}}
{{--<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","549047665545939");fbq("track","PageView");</script>--}}
{{--<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=549047665545939&amp;ev=PageView&amp;noscript=1"></noscript>--}}
{{--<style>#uhchatboz {width: 320px;height: 305px;display: block;background: url("https://uhchat.net/themes/chat-11.png") no-repeat;text-align: center;padding-top: 45px;position: fixed;bottom:-320px;right: 20px;z-index: 99999999999999; box-sizing: content-box;} #uhchatboz iframe{border:none;width:304px !important;height:305px !important;margin:0px !important;position:relative !important;display: inline !important;} #uhchatboz:hover {cursor: pointer;} @media screen and (max-width: 320px){#uhchatboz{right: 0px !important;}} #panel_chat_vatgia{display:none !important;} .zopim{display:none !important;} .zchat{display:none !important;} .copyrightin{display:none !important;} #tawkchat-minified-box{display:none !important;} .embed-responsive{padding-bottom:100% !important;} .sbzoff{display:none !important;} .sbzon{display:none !important;} </style><div id="uhchatboz" onclick="uhchatClick()"><iframe id="uhchatframe" src="/saved_resource.html" width="304px" height="305px" frameborder="0px" style="padding:0px;" allow="autoplay"></iframe></div>--}}

</body>
</html>
