<div id="header-pc">
    <div class="header-middle_area">
        <div class="container-fluid">
            <div class="row">
                <div class="telephone " style="color: #fff;">
                    <i class="fa fa-phone" style="color: red;"></i> Hotline: <a href=tel:{{ $footer->phone }} style="color: #fff;">{{ $footer->phone }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="header-logo_area" >
                        <a href="/">
                            <img style="height: 60px;width: 300px;" src="{{asset($logo->link)}}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 d-none d-lg-block">
                    <div class="header-top_area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 d-none d-lg-block">
                                    <div class="main-menu_area position-relative">
                                        <nav class="main-nav">
                                            <ul>
                                                <li class="with-sub-menu hover">
                                                    <a href="/danh-sach-san-pham" class="clearfix">
                                                        <strong>SHOP SẢN PHẨM</strong>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/phu-kien-do-den" class="clearfix">
                                                        <strong>PHỤ KIỆN ĐỘ ĐÈN</strong>
                                                    </a>
                                                </li>
{{--                                                <li class="">--}}
{{--                                                    <a href="/bao-hanh-gtrvietnam" class="clearfix">--}}
{{--                                                        <strong>BẢO HÀNH</strong>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
                                                <li class="">
                                                    <a href="{{ asset("/danh-muc-tin-tuc") }}" class="clearfix">
                                                        <strong>TIN TỨC</strong>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="clearfix">
                                                        <strong>LIÊN HỆ</strong>
                                                    </a>
                                                </li>

{{--                                                <li class="">--}}
{{--                                                    <a href="/lien-he-gtrvietnam" class="clearfix">--}}
{{--                                                        <strong>HỆ THỐNG CHI NHÁNH</strong>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="header-mobile" style="top: 0px">
    @include('UserSite.components.header.HeaderMobile')
    @include('UserSite.components.mobile_menu.MobileMenu')
</div>
