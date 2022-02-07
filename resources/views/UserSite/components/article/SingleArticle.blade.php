<div class="row">
    @foreach($posts as $post)
        <div class=" col-lg-2 col-md-3 col-sm-6 col-xs-6" style="height: 300px; max-height: 330px">
            <div class="blog-img img-hover_effect">
                <a href="tin-tuc/{{ $post->slug }}_{{ $post->id }}"
                   tabindex="0">
                    <img src="{{ asset($post->image) }}"
                         data-src=""
                         alt="{{ asset($post->title) }}">
                </a>
            </div>
            <div class="blog-content">
                <h5 class="" data-height="30px"
                    style="overflow-wrap: break-word;">
                    <a href="tin-tuc/{{ $post->slug }}_{{ $post->id }}"
                       tabindex="0">{{ $post->title }}</a></h5>
            </div>
        </div>
    @endforeach
</div>

