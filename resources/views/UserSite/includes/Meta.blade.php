<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>@yield('title')</title>
<link rel="shortcut icon" href="{{ asset($meta->link) }}" type="image/x-icon">
<link href="{{ asset($meta->link) }}" type="image/x-icon" rel="shortcut icon">
<link rel="alternate" hreflang="vi" href="http://kusvietnam.com/">
<link rel="canonical" href="http://kusvietnam.com/">
<meta name="theme-color" content="#000000">
<meta name="title" content="Led siêu sáng - Bi Led - Bi Laser - Đèn trợ sáng KUS Việt Nam">
<meta name="description"
      content="Kus Việt Nam - nhà cung cấp các sản phẩm led siêu sáng/ bi led/ bi xenon/ g-led/ ballast/ led bar phá sương - đi mưa chất lượng">
<meta name="keywords" content="Led siêu sáng - Bi Led - Bi Laser - Đèn trợ sáng KUS Việt Nam">
{{--<meta name="image" content="http://kusvietnam.com/upload/images/Garage-uy-tin-hien-dai-auto365-1.png?v=1.1.1">--}}
<meta name="generator" content="Công Ty Thiết Kế Web, Phần mềm STACKGOO">
<meta name="robots" content="index,follow">
<meta name="author" content="thương hiệu">
<meta name="refresh" http-equiv="refresh"/>
<meta name="language" content="Vietnamese"/>
<!-- Facebook Meta Tags -->

<meta property="og:locale" content="vi_VN">
<meta property="og:url" content="https://nothing.com">
<meta property="og:type" content="website">
<meta property="og:description" content="Kus Việt Nam - nhà cung cấp các sản phẩm led siêu sáng - bi led - bi xenon -led bar phá sương đi mưa chất lượng">
@if($homepage)
    <meta property="og:title" content="Led siêu sáng - Bi Led - Bi Laser - Đèn trợ sáng KUS Việt Nam">
    <meta property="og:image" content="{{ asset("upload/defaults/favicon.jpg") }}">
@else
    @stack("og_image")
@endif
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="560">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
{{--<link rel="shortcut icon" type="image/png" href="http://kusvietnam.com/upload/images/default/favicon-16x16.png">--}}
<link rel="stylesheet" id="googleapis-css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,600,700" as="style" type="text/css" media="all">
