@extends('UserSite.layouts.main.MainLayout', ['homepage' => false])
@section('title', $post->title)
@section('content')
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li><a href="/tin-tuc">Tin tức</a></li>
            <li>{{ $post -> title }}</li>
        </ul>

        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column " id="column-left">
            <div class="module blog-category titleLine">
                <h3 class="modtitle">Danh mục</h3>
                <div class="modcontent">
                    <ul class="list-group ">
                        @foreach($categories as $cate)
                            <li class="list-group-item">
                                <a href="/danh-muc-tin-tuc/{{ $cate -> slug }}" class="group-item active">
                                    {{ $cate -> name }}
                                </a>
                            </li>
                        @endforeach
                </div>
            </div>
{{--            <div class="module banner-left hidden-xs ">--}}
{{--                <div class="banner-sidebar banners">--}}
{{--                    <div>--}}
{{--                        <a title="Auto365.vn"--}}
{{--                           href="https://gtrvietnam.com/he-thong-do-xe-auto365-chinh-thuc-tiep-tuc-phan-phoi-san-pham-gtr-tai-thi-truong-viet-nam#">--}}
{{--                            <img--}}
{{--                                src="./HỆ THỐNG ĐỘ XE AUTO365 CHÍNH THỨC TIẾP TỤC PHÂN PHỐI SẢN PHẨM GTR TẠI THỊ TRƯỜNG VIỆT NAM_files/banner-sidebar.jpg"--}}
{{--                                alt="Auto365.vn">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </aside>

        <div id="content" class="col-md-9 col-sm-8">
            <div class="article-info">
                <div class="blog-header">
                    <h3>HỆ THỐNG ĐỘ XE AUTO365 CHÍNH THỨC TIẾP TỤC PHÂN PHỐI SẢN PHẨM GTR TẠI THỊ TRƯỜNG VIỆT NAM</h3>
                </div>
                <div class="form-group">
                    <a href="https://gtrvietnam.com/he-thong-do-xe-auto365-chinh-thuc-tiep-tuc-phan-phoi-san-pham-gtr-tai-thi-truong-viet-nam"
                       class="image-popup"><img
                            src="./HỆ THỐNG ĐỘ XE AUTO365 CHÍNH THỨC TIẾP TỤC PHÂN PHỐI SẢN PHẨM GTR TẠI THỊ TRƯỜNG VIỆT NAM_files/bi-xenon-gtr-premium__1__1934a31c902d4871b0d0a6d647bc4b86_2048x2048(1).webp"
                            alt="HỆ THỐNG ĐỘ XE AUTO365 CHÍNH THỨC TIẾP TỤC PHÂN PHỐI SẢN PHẨM GTR TẠI THỊ TRƯỜNG VIỆT NAM"></a>
                </div>

                <div class="article-description">
                    <div id="content-detail">
                        {!! $post->content !!}
                        <div class="clearfix"></div>
                        <style>
                            .list_group_page {
                                display: block;
                            }

                            .list_group_page .item_group_page {
                                display: inline-block;
                                width: 49%;
                                margin-bottom: 30px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
