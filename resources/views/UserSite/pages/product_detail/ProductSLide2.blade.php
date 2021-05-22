
<link type="text/css" rel="stylesheet" href="{{ asset("css/lightgallery.min.css") }}" xmlns=""/>
<link type="text/css" rel="stylesheet" href="{{ asset("css/lightslider.min.css") }}" xmlns=""/>
<script src="{{ asset("js/lightslider.js") }}"></script>
<script src="{{ asset("js/lightGallery.min.js") }}"></script>
<script>
    $(document).ready(function() {
        $('#imageGallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:9,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition: 'center',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide'
                });
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
