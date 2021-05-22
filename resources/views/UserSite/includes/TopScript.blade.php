@include('UserSite.includes.Meta')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
<link rel="stylesheet" id="lib-css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;" type="text/css" media="all">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
{{--<link rel="stylesheet" id="carousel-css" href="{{ asset('css/owl.carousel.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="miniColors-css" href="{{ asset('css/miniColors.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="pe-icon-7-stroke-css" href="{{ asset('css/pe-icon-7-stroke.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="helper-css" href="{{ asset('css/helper.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="so_searchpro-css" href="{{ asset('css/so_searchpro.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
<link rel="stylesheet" id="so_megamenu-css" href="{{ asset('css/so_megamenu.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">
{{--<link rel="stylesheet" id="so_advanced_search-css" href="{{ asset('css/so_advanced_search.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="so-listing-tabs-css" href="{{ asset('css/so-listing-tabs.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="so-categories-css" href="{{ asset('css/so-categories.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="so-newletter-popup-css" href="{{ asset('css/so-newletter-popup.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="so-latest-blog-css" href="{{ asset('css/so-latest-blog.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="footer5-css" href="{{ asset('css/footer5.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="header5-css" href="{{ asset('css/header5.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="color_scheme" href="{{ asset('css/home5.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
{{--<link rel="stylesheet" id="responsive-css" href="{{ asset('css/responsive.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">--}}
<link rel="stylesheet" id="custom_main-css" href="{{ asset('css/custom_main.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">
<link rel="stylesheet" href="{{ asset('css/ion-fonts.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<!-- jQuery JS -->
<script src="{{ asset('kusvn/jquery-1.12.4.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('kusvn/bootstrap.min.js') }}"></script>
<script>
    var wd_width = window.innerWidth;
    if (wd_width <= 1024) {
        document.write('<link rel="stylesheet" id="custom_mobile-css" href="{{ asset('css/custom_mobile.css') }}" as="style">');
    }
</script>

