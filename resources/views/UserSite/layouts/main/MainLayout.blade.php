<!DOCTYPE html>
<html lang="en"
      class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
<head>
    @include('UserSite.includes.TopScript')
</head>
<body class="template-color-1">
<div id="main-wrapper">
    <header id="header">
        @include('UserSite.components.header.Header')
    </header>


    <!-- Content user site here -->
    <div class="content ">
        @yield('content')
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
<script src="{{ asset('gtrvn/modernizr-2.8.3.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('gtrvn/popper.min.js') }}"></script>
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

{{--<script src="{{ asset('js/rate.min.js') }}"></script>--}}

<script src="{{ asset('js/libraryjs.js') }}"></script>

{{--<script src="{{ asset('js/application.js') }}"></script>--}}

{{--<script src="{{ asset('js/homepage_mobile.js') }}"></script>--}}

{{--<script src="{{ asset('js/custom_mobile.js') }}"></script>--}}

<script src="{{ asset('js/mobile.js') }}"></script>


<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><iclass="fa fa-angle-double-up"></i></a>
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
