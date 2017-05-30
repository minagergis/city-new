<div id="myCarousel" class="carousel slide">

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        @if(isset($Media))
            @foreach($Media as $key => $Media_single)
                <div class="item {{ $key == 0 ? 'active' : '' }}">
                    <div class="fill">
                        <img src="{{ asset('public/uploads/full/' . $Media_single->guid) }}" class="img-responsive">
                    </div>
                    <div class="carousel-caption gallary-item-more-caption">
                        <h2>{{$gallary->post_title}}</h2>
                        <p>{!! $gallary->post_content !!}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <!-- Controls -->
    <a class="left carousel-control arrows-stars" href="#myCarousel" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </a>
    <a class="right carousel-control arrows-stars" href="#myCarousel" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </a>

    <!-- options -->
    <div class="gallary-item-more-options">
        <div class="gallary-item-image-expand">
            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
        </div>
        <div class="gallary-item-close">
            <i class="fa fa-times" aria-hidden="true"></i>
            <span>close</span>
        </div>
    </div>
</div>