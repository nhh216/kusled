<!DOCTYPE html>
<html lang="en"
      class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
<head>
    @if($homepage)
        @include('UserSite.includes.TopScript')
    @else
        @include('UserSite.includes.TopScriptNotHome')
    @endif
        <style>
            .header-right_area > ul > li.minicart-wrap > a.minicart-btn:before {
                content: " ";
            }

            .header-top_area .main-menu_area > nav > ul > li > a {
                padding: 12px 0;
            }

            .header-middle_area {
                padding-bottom: 0;
            }

            .header-main_area .header-sticky.sticky.header-top_area {
                padding-top: 0 !important;
            }

            .header-top_area.header-sticky .main-menu_area {
                padding-top: 24px;
            }

            .header-right_area > ul > li.minicart-wrap {
                width: 100%;
            }
        </style>
</head>
<body class="template-color-1">
<div id="main-wrapper">
    <header id="header" class="typeheader-5">
        @include('UserSite.components.header.Header')
    </header>


    <!-- Content user site here -->
    <div class="main-container">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <!-- Uren's Footer Area End Here -->
    @include('UserSite.components.footer.Footer')
</div>

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('gtrvn/jquery-1.12.4.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('gtrvn/bootstrap.min.js') }}"></script>
<!-- Modernizer JS -->
{{--<script src="{{ asset('gtrvn/modernizr-2.8.3.min.js') }}"></script>--}}
<!-- Popper JS -->
{{--<script src="{{ asset('gtrvn/popper.min.js') }}"></script>--}}
<!-- Slick Slider JS -->
{{--<script src="{{ asset('gtrvn/slick.min.js') }}"></script>--}}
<!-- Barrating JS -->
{{--<script src="{{ asset('gtrvn/jquery.barrating.min.js') }}"></script>--}}
<!-- Counterup JS -->
{{--<script src="{{ asset('gtrvn/jquery.counterup.js') }}"></script>--}}
<!-- Nice Select JS -->
{{--<script src="{{ asset('gtrvn/jquery.nice-select.js') }}"></script>--}}
<!-- Sticky Sidebar JS -->
{{--<script src="{{ asset('gtrvn/jquery.sticky-sidebar.min.js') }}"></script>--}}
<!-- Jquery-ui JS -->
{{--<script src="{{ asset('gtrvn/jquery-ui.min.js') }}"></script>--}}

{{--<script src="{{ asset('gtrvn/jquery.ui.touch-punch.min.js') }}"></script>--}}
<!-- Lightgallery JS -->
{{--<script src="{{ asset('gtrvn/lightgallery.min.js') }}"></script>--}}
<!-- Scroll Top JS -->
<script src="{{ asset('gtrvn/scroll-top.js') }}"></script>
<!-- Theia Sticky Sidebar JS -->
{{--<script src="{{ asset('gtrvn/theia-sticky-sidebar.min.js') }}"></script>--}}
<!-- Waypoints JS -->
{{--<script src="{{ asset('gtrvn/waypoints.min.js') }}"></script>--}}
<!-- jQuery Zoom JS -->
{{--<script src="{{ asset('gtrvn/jquery.zoom.min.js') }}"></script>--}}

<script src="{{ asset('gtrvn/dotdotdot.js') }}"></script>

<script src="{{ asset('js/megamenu.js') }}"></script>

<script src="{{ asset('gtrvn/main.js') }}"></script>

<script src="{{ asset('gtrvn/custom.js') }}"></script>

{{--<script src="{{ asset('js/rate.min.js') }}"></script>--}}

{{--<script src="{{ asset('js/libraryjs.js') }}"></script>--}}

{{--<script src="{{ asset('js/application.js') }}"></script>--}}

{{--<script src="{{ asset('js/homepage_mobile.js') }}"></script>--}}

{{--<script src="{{ asset('js/custom_mobile.js') }}"></script>--}}

{{--<script src="{{ asset('js/mobile.js') }}"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.10.0/dist/js/lightgallery.min.js"></script>--}}
{{--<script type="text/javascript">--}}
{{--    $(document).ready(function() {--}}
{{--        $('#imageGallery').lightSlider({--}}
{{--            gallery:true,--}}
{{--            item:1,--}}
{{--            loop:true,--}}
{{--            thumbItem:9,--}}
{{--            slideMargin:0,--}}
{{--            enableDrag: false,--}}
{{--            currentPagerPosition:'left',--}}
{{--            onSliderLoad: function(el) {--}}
{{--                el.lightGallery({--}}
{{--                    selector: '#imageGallery .lslide'--}}
{{--                });--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;">
    <i class="fa fa-angle-double-up"></i></a>
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

</body>
</html>
