@include('partials.header-site')
<?php
$total_prop = count($props);
$propindex = 1;
?>
<div class="page-content">
    <div class="container">
        <li id="slide-window-prop">

            <ol id="slides" start="1">
                @foreach($props as $prop)
                    <?php
                    $extra = isset($prop) ? json_decode($prop->extra, true) : [];
                    $extra_trans = isset($prop) ? json_decode($prop->post_trans_extra, true) : [];
                    ?>
                    @if($propindex == 1)
                        <li class="main-slide alive">
                            @endif
                            <div class="col-xs-12 col-sm-6 col-md-4 nopadding slide-prop-item">
                                <a href="#">
                                    <img src="{{ asset('public/uploads/full/' . $prop->media->guid) }}"
                                         class="img-responsive">
                                    <div class="slide-prop-item-title">
                                        <p>{{$prop->post_title}}</p>
                                        <p>{{$extra_trans['location']}}</p>
                                    </div>
                                    <div class="slide-prop-item-desc @if(isset($extra['sales']) && $extra['sales']==1 ) activeSale @endif">
                                        <div class="prop-item-hover">
                                            <div>
                                                <p class="prop-name">{{$prop->post_title}}</p>
                                                <p class="prop-location">{{$extra_trans['location']}}</p>
                                                <p class="prop-description">{{$prop->post_excerpt}}</p>
                                                <p class="prop-sale-now">sale now open</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @if($propindex%5==0)
                        </li>
                        <li class="main-slide">
                            @endif
                            @if($propindex==$total_prop)
                        </li>
                    @endif

                <?php $propindex++; ?>

                @endforeach
                {{--<li class="main-slide">--}}
                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding slide-prop-item">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"--}}
                {{--class="img-responsive">--}}
                {{--<div class="slide-prop-item-title">--}}
                {{--<p>dyar park</p>--}}
                {{--<p>new cairo</p>--}}
                {{--</div>--}}
                {{--<div class="slide-prop-item-desc activeSale">--}}
                {{--<div class="prop-item-hover">--}}
                {{--<div>--}}
                {{--<p class="prop-name">dyar park</p>--}}
                {{--<p class="prop-location">new cairo</p>--}}
                {{--<p class="prop-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--<p class="prop-sale-now">sale now open</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding slide-prop-item">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner2.jpg"--}}
                {{--class="img-responsive">--}}
                {{--<div class="slide-prop-item-title">--}}
                {{--<p>dyar park</p>--}}
                {{--<p>new cairo</p>--}}
                {{--</div>--}}
                {{--<div class="slide-prop-item-desc activeSale">--}}
                {{--<div class="prop-item-hover">--}}
                {{--<div>--}}
                {{--<p class="prop-name">dyar park</p>--}}
                {{--<p class="prop-location">new cairo</p>--}}
                {{--<p class="prop-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--<p class="prop-sale-now">sale now open</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding slide-prop-item">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner3.jpg"--}}
                {{--class="img-responsive">--}}
                {{--<div class="slide-prop-item-title">--}}
                {{--<p>dyar park</p>--}}
                {{--<p>new cairo</p>--}}
                {{--</div>--}}
                {{--<div class="slide-prop-item-desc">--}}
                {{--<div class="prop-item-hover">--}}
                {{--<div>--}}
                {{--<p class="prop-name">dyar park</p>--}}
                {{--<p class="prop-location">new cairo</p>--}}
                {{--<p class="prop-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--<p class="prop-sale-now">sale now open</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding slide-prop-item">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner4.jpg"--}}
                {{--class="img-responsive">--}}
                {{--<div class="slide-prop-item-title">--}}
                {{--<p>dyar park</p>--}}
                {{--<p>new cairo</p>--}}
                {{--</div>--}}
                {{--<div class="slide-prop-item-desc">--}}
                {{--<div class="prop-item-hover">--}}
                {{--<div>--}}
                {{--<p class="prop-name">dyar park</p>--}}
                {{--<p class="prop-location">new cairo</p>--}}
                {{--<p class="prop-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--<p class="prop-sale-now">sale now open</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding slide-prop-item">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"--}}
                {{--class="img-responsive">--}}
                {{--<div class="slide-prop-item-title">--}}
                {{--<p>dyar park</p>--}}
                {{--<p>new cairo</p>--}}
                {{--</div>--}}
                {{--<div class="slide-prop-item-desc">--}}
                {{--<div class="prop-item-hover">--}}
                {{--<div>--}}
                {{--<p class="prop-name">dyar park</p>--}}
                {{--<p class="prop-location">new cairo</p>--}}
                {{--<p class="prop-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--<p class="prop-sale-now">sale now open</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</div>--}}
                {{--</li>--}}


            </ol>
            <div class="slide-window-prop-control col-md-4">
              <span id="left">
                <div>
                  <i class="arrow-left"></i>
                  <span>previus</span>
                </div>
              </span>
              <span id="right">
                <div>
                  <span>next</span>
                  <i class="arrow-right"></i>
                </div>
              </span>
            </div>

    </div>
</div>
</div>
<!-- slider -->

@include('partials.footer-index')