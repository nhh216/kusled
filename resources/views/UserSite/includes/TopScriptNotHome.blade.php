@include('UserSite.includes.Meta')

<link rel="shortcut icon" type="image/png" href="/upload/images/default/favicon-16x16.png"/>
<link rel="stylesheet" id="googleapis-css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,600,700&display=swap" as="style">
<link rel="stylesheet" id="lib-css" href="{{ asset('css/fontawesome.min.css') }}"  type="text/css" media="all">
{{--<link rel="stylesheet" href="{{ asset("admin/plugins/fontawesome-free/css/solid.css") }}">--}}
<!-- Libs CSS============================================ -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" id="carousel-css" href="https://gtrvietnam.com/templates/default/public/js/owl-carousel/owl.carousel.css" as="style">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" id="lib-css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;" type="text/css" media="all">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" id="pe-icon-7-stroke-css" href="{{ asset('css/pe-icon-7-stroke.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">
<link rel="stylesheet" id="so_megamenu-css" href="{{ asset('css/so_megamenu.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">
<link rel="stylesheet" id="color_scheme" href="{{ asset('css/home5.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">
<link rel="stylesheet" id="responsive-css" href="{{ asset('css/responsive.css') }}" as="style" onload="this.onload=null;" type="text/css" media="all">
<link rel="stylesheet" id="custom_main-css" href="{{ asset('css/custom_main.css') }}" as="style" >
<link rel="stylesheet" id="custom-css" href="{{ asset("home_v2/css/ion-fonts.css") }}" as="style">
<link rel="stylesheet" href="{{ asset("home_v2/css/ion-fonts.css") }}">
<link rel="stylesheet" href="{{ asset("home_v2/css/style.css") }}">
<link rel="stylesheet" href="{{ asset("home_v2/custom.css") }}">
<link rel="stylesheet" href="{{ asset("css/custom.css") }}">
<link rel="stylesheet" href="{{ asset("css/custom_main.css") }}">
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
