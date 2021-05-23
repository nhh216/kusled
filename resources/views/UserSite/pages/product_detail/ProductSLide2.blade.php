<div>
    <link type="text/css" rel="stylesheet" href="{{ asset("css/lightgallery.min.css") }}" xmlns=""/>
    <link type="text/css" rel="stylesheet" href="{{ asset("css/lightslider.min.css") }}" xmlns=""/>
    <script src="{{ asset("js/lightGallery.min.js") }}"></script>
    <script src="{{ asset("js/lightslider.js") }}"></script>
    <script>
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
                gallery: true,
                item: 1,
                loop: true,
                thumbItem: 4,
                slideMargin: 0,
                enableDrag: false,
                currentPagerPosition: 'left',
                onSliderLoad: function (el) {
                    $("body").on("click", ".lslide.active .slide_img_play", function () {
                        el.lightGallery({
                            selector: '#imageGallery .lslide'
                        });
                        $("body .lslide.active").trigger("click");
                    })
                    el.lightGallery({
                        selector: '#imageGallery .lslide'
                    });
                },
                onAfterSlide: function () {
                    $('.lslide').removeClass("contain-iframe").find("iframe").remove();
                    $('.lslide img').addClass("slide_img_play");

                }
            });
        });
    </script>
    <ul id="imageGallery">
        @foreach($images as $image)
            <li data-thumb="{{ asset($image -> link) }}" data-src="{{ asset($image -> link) }}">
                <img src="{{ asset($image -> link) }}" />
            </li>
        @endforeach
    </ul>
</div>
