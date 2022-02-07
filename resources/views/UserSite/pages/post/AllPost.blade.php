@extends('UserSite.layouts.main.MainLayout', ['homepage' =>  false])
@section('content')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ asset("/") }}"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Danh mục tin tức</a></li>
        </ul>

        <!--Left Part Start -->
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column " id="column-left">
            <div class="module blog-category titleLine">
                <h3 class="modtitle">Danh mục tin</h3>
                <div class="modcontent">
                    <ul class="list-group ">
                        @foreach($categories as $category)
                            <li class="li-main">
                                <a href="{{ $category->slug }}_{{ $category->id }}"
                                   class="a-main makeup">
                                    <span>{{ $category->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="blog-category clearfix">
                <div class="blog-listitem row" style="padding-bottom: 30px;border-bottom: 2px solid red;margin-bottom: 30px;">
                    @foreach($posts as $post)
                        <div class="blog-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="blog-item-inner clearfix">
                                <div class="itemBlogImg clearfix">
                                    <div class="article-image">
                                        <div>
                                            <a href="{{ asset("/tin-tuc") }}/{{ $post -> slug }}_{{ $post->id }}">
                                                <img
                                                    src="{{ asset($post->image) }}"
                                                    alt="{{ asset($post->title) }}">
                                            </a>
                                        </div>
                                        <div class="article-date">
                                            <div class="date"><span class="article-date"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemBlogContent clearfix ">
                                    <div class="blog-content">
                                        <div class="article-title font-title">
                                            <h4>
                                                <a href="{{ asset("/tin-tuc") }}/{{ $post -> slug }}_{{ $post->id }}">
                                                    {{ $post->title }}
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="readmore"><a class="btn-readmore font-title"
                                                                 href="{{ asset("/tin-tuc") }}/{{ $post -> slug }}_{{ $post->id }}"><i
                                                    class="fa fa-caret-right"></i>Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

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
