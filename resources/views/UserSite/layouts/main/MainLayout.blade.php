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
        <header id="header" class="typeheader-5 header-main_area header-main_area-2 bg--black">
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

<script src="{{ asset('kusvn/slick.min.js') }}"></script>
<script src="{{ asset('kusvn/jquery.counterup.js') }}"></script>
<script src="{{ asset('kusvn/scroll-top.js') }}"></script>
<script src="{{ asset('kusvn/dotdotdot.js') }}"></script>
<script src="{{ asset('js/megamenu.js') }}"></script>
<script src="{{ asset('kusvn/main.js') }}"></script>
<script src="{{ asset('kusvn/custom.js') }}"></script>

<script src="{{ asset('js/custom_mobile.js') }}"></script>

<script src="{{ asset('js/mobile.js') }}"></script>

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
