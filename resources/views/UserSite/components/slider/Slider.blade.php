<div id="slider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach($sliders as $key => $slide)
            @if( $loop->first )
            <div class="item active">
                <img src="{{ asset($slide->link) }}" alt="{{ $slide->name }}" style="width:100%;">
                <div class="carousel-caption">
                    <h3>{{ $slide->name }}</h3>
                    <p>{{ $slide->desc }}</p>
                </div>
            </div>
            @else
            <div class="item">
                <img src="{{ asset($slide->link) }}" alt="{{ $slide->name }}" style="width:100%;">
                <div class="carousel-caption">
                    <h3>{{ $slide->name }}</h3>
                    <p>{{ $slide->desc }}</p>
                </div>
            </div>
            @endif
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#slider" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#slider" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
