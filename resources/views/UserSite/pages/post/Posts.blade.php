@extends('UserSite.layouts.main.MainLayout', ['homepage' =>  false])
@section('content')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="https://gtrvietnam.com/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://gtrvietnam.com/tin-tuc">Tin tức</a></li>
        </ul>

        <!--Left Part Start -->
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column " id="column-left">
            <div class="module blog-category titleLine">
                <h3 class="modtitle">Danh mục tin</h3>
                <div class="modcontent">
                    <ul class="list-group ">

                    </ul>

                </div>
            </div>
{{--            <div class="module banner-left hidden-xs ">--}}
{{--                <div class="banner-sidebar banners">--}}
{{--                    <div>--}}
{{--                        <a title="Auto365.vn" href="https://gtrvietnam.com/tin-tuc#">--}}
{{--                            <img src="./Tin tức_files/banner-sidebar.jpg" alt="Auto365.vn">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="blog-category clearfix">
{{--                <h3 class="modtitle">--}}
{{--                    <a href="/tin-tuc/thong-tin-kus"--}}
{{--                       style="color: #000;font-weight: bold;font-size: 2.4rem;margin-bottom: 20px;">Thông tin GTR</a>--}}
{{--                </h3>--}}
                <div class="blog-listitem row"
                     style="padding-bottom: 30px;border-bottom: 2px solid red;margin-bottom: 30px;">
{{--                    <div class="blog-item col-lg-3 col-md-3 col-sm-4 col-xs-6">--}}
{{--                        <div class="blog-item-inner clearfix">--}}
{{--                            <div class="itemBlogImg clearfix">--}}
{{--                                <div class="article-image">--}}
{{--                                    <div>--}}
{{--                                        <a href="https://gtrvietnam.com/he-thong-do-xe-auto365-chinh-thuc-tiep-tuc-phan-phoi-san-pham-gtr-tai-thi-truong-viet-nam">--}}
{{--                                            <img--}}
{{--                                                src="./Tin tức_files/bi-xenon-gtr-premium__1__1934a31c902d4871b0d0a6d647bc4b86_2048x2048(1).webp"--}}
{{--                                                alt="HỆ THỐNG ĐỘ XE AUTO365 CHÍNH THỨC TIẾP TỤC PHÂN PHỐI SẢN PHẨM GTR TẠI THỊ TRƯỜNG VIỆT NAM">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="article-date">--}}
{{--                                        <div class="date">  <span class="article-date">--}}

{{--                                        </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="itemBlogContent clearfix ">--}}
{{--                                <div class="blog-content">--}}
{{--                                    <div class="article-title font-title">--}}
{{--                                        <h4>--}}
{{--                                            <a href="https://gtrvietnam.com/he-thong-do-xe-auto365-chinh-thuc-tiep-tuc-phan-phoi-san-pham-gtr-tai-thi-truong-viet-nam">HỆ--}}
{{--                                                THỐNG ĐỘ XE AUTO365 CHÍNH THỨC TIẾP TỤC PHÂN PHỐI SẢN PHẨM GTR TẠI THỊ--}}
{{--                                                TRƯỜNG VIỆT NAM</a></h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="blog-meta"><span class="author"><i--}}
{{--                                                class="fa fa-user"></i><span>Post by </span>Auto365</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="readmore"><a class="btn-readmore font-title"--}}
{{--                                                             href="https://gtrvietnam.com/he-thong-do-xe-auto365-chinh-thuc-tiep-tuc-phan-phoi-san-pham-gtr-tai-thi-truong-viet-nam"><i--}}
{{--                                                class="fa fa-caret-right"></i>Xem thêm</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

{{--                <h3 class="modtitle">--}}
{{--                    <a href=""--}}
{{--                       style="color: #000;font-weight: bold;font-size: 2.4rem;margin-bottom: 20px;">Hiệu quả chiếu--}}
{{--                        sáng</a>--}}
{{--                </h3>--}}
{{--                <div class="blog-listitem row"--}}
{{--                     style="padding-bottom: 30px;border-bottom: 2px solid red;margin-bottom: 30px;">--}}

{{--                    <div class="blog-item col-lg-3 col-md-3 col-sm-4 col-xs-6">--}}
{{--                        <div class="blog-item-inner clearfix">--}}
{{--                            <div class="itemBlogImg clearfix">--}}
{{--                                <div class="article-image">--}}
{{--                                    <div>--}}
{{--                                        <a href="https://gtrvietnam.com/tren-tay-bi-gam-gtr-v2-sieu-pham-do-den-gam-2019-hay-chi-la-vo-danh-tieu-tot">--}}
{{--                                            <img--}}
{{--                                                src="./Tin tức_files/screenshot_216_1e234050203745d0bf6b089dd2b500e0_beeec01c93b74dafad7c2373cd9a8516_large.webp"--}}
{{--                                                alt="TRÊN TAY BI GẦM GTR V2: SIÊU PHẨM ĐỘ ĐÈN GẦM 2019 HAY CHỈ LÀ VÔ DANH TIỂU TỐT?"--}}
{{--                                            ">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="article-date">--}}
{{--                                        <div class="date">  <span class="article-date">--}}

{{--                                        </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="itemBlogContent clearfix ">--}}
{{--                                <div class="blog-content">--}}
{{--                                    <div class="article-title font-title">--}}
{{--                                        <h4>--}}
{{--                                            <a href="https://gtrvietnam.com/tren-tay-bi-gam-gtr-v2-sieu-pham-do-den-gam-2019-hay-chi-la-vo-danh-tieu-tot">TRÊN--}}
{{--                                                TAY BI GẦM GTR V2: SIÊU PHẨM ĐỘ ĐÈN GẦM 2019 HAY CHỈ LÀ VÔ DANH TIỂU--}}
{{--                                                TỐT?</a></h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="blog-meta"><span class="author"><i--}}
{{--                                                class="fa fa-user"></i><span>Post by </span>Auto365</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="readmore"><a class="btn-readmore font-title"--}}
{{--                                                             href="https://gtrvietnam.com/tren-tay-bi-gam-gtr-v2-sieu-pham-do-den-gam-2019-hay-chi-la-vo-danh-tieu-tot"><i--}}
{{--                                                class="fa fa-caret-right"></i>Xem thêm</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blog-item col-lg-3 col-md-3 col-sm-4 col-xs-6">--}}
{{--                        <div class="blog-item-inner clearfix">--}}
{{--                            <div class="itemBlogImg clearfix">--}}
{{--                                <div class="article-image">--}}
{{--                                    <div>--}}
{{--                                        <a href="https://gtrvietnam.com/review-anh-sang-bi-gtr-g-led-x-va-tim-hieu-ky-thuat-do-den-ta%CC%86ng-sang-hang-da%CC%82u-tai-he-thong-auto365">--}}
{{--                                            <img--}}
{{--                                                src="./Tin tức_files/screenshot_224_7bf803a4e08943f38f410e94cd936e13_7e0c2407f29242448d150a606ee8572b_large.webp"--}}
{{--                                                alt="REVIEW ÁNH SÁNG BI GTR G-LED X VÀ TÌM HIỂU KỸ THUẬT ĐỘ ĐÈN TĂNG SÁNG HÀNG ĐẦU TẠI HỆ THỐNG AUTO365"--}}
{{--                                            ">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="article-date">--}}
{{--                                        <div class="date">  <span class="article-date">--}}

{{--                                        </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="itemBlogContent clearfix ">--}}
{{--                                <div class="blog-content">--}}
{{--                                    <div class="article-title font-title">--}}
{{--                                        <h4>--}}
{{--                                            <a href="https://gtrvietnam.com/review-anh-sang-bi-gtr-g-led-x-va-tim-hieu-ky-thuat-do-den-ta%CC%86ng-sang-hang-da%CC%82u-tai-he-thong-auto365">REVIEW--}}
{{--                                                ÁNH SÁNG BI GTR G-LED X VÀ TÌM HIỂU KỸ THUẬT ĐỘ ĐÈN TĂNG SÁNG HÀNG--}}
{{--                                                ĐẦU TẠI HỆ THỐNG AUTO365</a></h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="blog-meta"><span class="author"><i--}}
{{--                                                class="fa fa-user"></i><span>Post by </span>Auto365</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="readmore"><a class="btn-readmore font-title"--}}
{{--                                                             href="https://gtrvietnam.com/review-anh-sang-bi-gtr-g-led-x-va-tim-hieu-ky-thuat-do-den-ta%CC%86ng-sang-hang-da%CC%82u-tai-he-thong-auto365"><i--}}
{{--                                                class="fa fa-caret-right"></i>Xem thêm</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <h3 class="modtitle">--}}
{{--                    <a href=""--}}
{{--                       style="color: #000;font-weight: bold;font-size: 2.4rem;margin-bottom: 20px;">Hướng dẫn lắp--}}
{{--                        đặt</a>--}}
{{--                </h3>--}}
            </div>
        </div>

        <script type="text/javascript">
            $("h2").addClass("title"),
                $("h2").css({
                    "line-height": "1.2",
                    "color": "#004835",
                    "text-transform": "uppercase",
                    "text-align": "center",
                })
        </script>
    </div>
@endsection
