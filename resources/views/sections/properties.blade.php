@extends('layouts.master')

@section('styles')

@endsection

@section('content')
    <?php
    $extra = isset($PropertyDetails) ? json_decode($PropertyDetails->extra, true) : [];
    $extra_trans = isset($PropertyDetails) ? json_decode($PropertyDetails->post_trans_extra, true) : [];
    ?>

    <div class="page-content">
        <div class="inner-page">
            <div class="container">
                <div class="subsc-title">
                    <span>{{$PropertyDetails->post_title}}</span>
                    {{--<span> New Cairo </span>--}}
                </div>
                <div class="featured-img">
                    <img src="{{ asset('public/assets/site') }}/images/prop-inner-in1.jpg">
                </div>
                <div class="prop-state">{{$PropertyDetails->post_title}}</div>
            </div>

            <div class="tabs-prop">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3"> <!-- required for floating -->
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-left sideways">
                                @if(isset($extra_trans['topic_title_1'])&& $extra_trans['topic_title_1'] !='' && $extra_trans['topic_title_1'] !=null)
                                    <li class="active"><a href="#1-v"
                                                          data-toggle="tab">{{$extra_trans['topic_title_1']}}</a></li>
                                @endif
                                @if(isset($extra_trans['topic_title_2'])&& $extra_trans['topic_title_2'] !='' && $extra_trans['topic_title_2'] !=null)
                                    <li><a href="#2-v" data-toggle="tab">{{$extra_trans['topic_title_2']}}</a></li>
                                @endif
                                @if(isset($extra_trans['topic_title_3'])&& $extra_trans['topic_title_3'] !='' && $extra_trans['topic_title_3'] !=null)
                                    <li><a href="#3-v" data-toggle="tab">{{$extra_trans['topic_title_3']}}</a></li>
                                @endif
                                @if(isset($extra_trans['topic_title_4'])&& $extra_trans['topic_title_4'] !='' && $extra_trans['topic_title_4'] !=null)
                                    <li><a href="#4-v" data-toggle="tab">{{$extra_trans['topic_title_4']}}</a></li>
                                @endif
                                @if(isset($extra_trans['topic_title_5'])&& $extra_trans['topic_title_5'] !='' && $extra_trans['topic_title_5'] !=null)
                                    <li><a href="#5-v" data-toggle="tab">{{$extra_trans['topic_title_5']}}</a></li>
                                @endif
                                @if(isset($extra_trans['topic_title_6'])&& $extra_trans['topic_title_6'] !='' && $extra_trans['topic_title_6'] !=null)
                                    <li><a href="#6-v" data-toggle="tab">{{$extra_trans['topic_title_6']}}</a></li>
                                @endif
                            </ul>
                        </div>

                        <div class="col-xs-9">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                @if(isset($extra_trans['topic_title_1'])&& $extra_trans['topic_title_1'] !='' && $extra_trans['topic_title_1'] !=null)
                                    <div class="tab-pane active" id="1-v">
                                        {!! $extra_trans['topic_body_1'] !!}
                                    </div>
                                @endif
                                @if(isset($extra_trans['topic_title_2'])&& $extra_trans['topic_title_2'] !='' && $extra_trans['topic_title_2'] !=null)
                                    <div class="tab-pane" id="2-v">{!! $extra_trans['topic_body_2'] !!}</div>
                                @endif
                                @if(isset($extra_trans['topic_title_3'])&& $extra_trans['topic_title_3'] !='' && $extra_trans['topic_title_3'] !=null)
                                    <div class="tab-pane" id="3-v">{!! $extra_trans['topic_body_3'] !!}</div>
                                @endif
                                @if(isset($extra_trans['topic_title_4'])&& $extra_trans['topic_title_4'] !='' && $extra_trans['topic_title_4'] !=null)
                                    <div class="tab-pane" id="4-v">{!! $extra_trans['topic_body_4'] !!}</div>
                                @endif
                                @if(isset($extra_trans['topic_title_5'])&& $extra_trans['topic_title_5'] !='' && $extra_trans['topic_title_5'] !=null)
                                    <div class="tab-pane" id="5-v">{!! $extra_trans['topic_body_5'] !!}</div>
                                @endif
                                @if(isset($extra_trans['topic_title_6'])&& $extra_trans['topic_title_6'] !='' && $extra_trans['topic_title_6'] !=null)
                                    <div class="tab-pane" id="6-v">{!! $extra_trans['topic_body_6'] !!}</div>
                                @endif
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--  tabs -->


            <div class="tabs-prop">
                <div class="container">
                    <div class="row fac-loc">
                        <div class="col-md-3">
                            <div class="small-title">facilities</div>
                            <div class="fac-icons">
                                <div class="fac-house"></div>
                                <div class="fac-gym"></div>
                                <div class="fac-shop"></div>
                                <div class="fac-pool"></div>
                                <div class="fac-drink"></div>
                                <div class="fac-green"></div>
                                <div class="fac-resturant"></div>
                                <div class="fac-disabled"></div>
                                <div class="fac-camera"></div>
                                <div class="fac-stars"></div>
                                <div class="fac-wifi"></div>
                                <div class="fac-parking"></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="small-title">location</div>
                            <div id="map"></div>
                            <script>
                                function initMap() {
                                    var uluru = {lat: -25.363, lng: 131.044};
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 4,
                                        center: uluru
                                    });
                                    var marker = new google.maps.Marker({
                                        position: uluru,
                                        map: map
                                    });

                                }
                            </script>
                            <script async defer
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq8vfrl5gdXny91cZdOIDGptxdRb3VUg8&callback=initMap"></script>
                        </div>
                    </div>
                </div>
            </div>
            <!-- facilities and location -->


            <div class="gallary-prop">
                <div class="container-fluid">
                    <div class="row">
                        <div id="myCarousel" class="carousel fdi-Carousel slide">
                            <!-- Carousel items -->
                            <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                                <div class="carousel-inner onebyone-carosel">
                                    <div class="item active">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <a href="#"><img
                                                        src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg"
                                                        class="img-responsive center-block"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <a href="#"><img
                                                        src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg"
                                                        class="img-responsive center-block"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <a href="#"><img
                                                        src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg"
                                                        class="img-responsive center-block"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <a href="#"><img
                                                        src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg"
                                                        class="img-responsive center-block"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <a href="#"><img
                                                        src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg"
                                                        class="img-responsive center-block"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <a href="#"><img
                                                        src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg"
                                                        class="img-responsive center-block"></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control arrows-stars" href="#eventCarousel" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                                <a class="right carousel-control arrows-stars" href="#eventCarousel" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!--/carousel-inner-->
                        </div><!--/myCarousel-->
                    </div>
                </div>
            </div>
            <!-- gallary slider -->


        </div>
        <!-- inner page -->
    </div>
    <!-- page content -->
    <div class="related-projects">
        <div class="container-fluid">
            <div class="row">
                <div class="current-title">gated communities</div>
                <div class="current-projects">
                    <a href="">bellagio</a>
                    <a href="">dyar</a>
                    <a href="">dyar park</a>
                    <a href="">le reve</a>
                    <a href="">lavande</a>
                    <a href="">meadows park</a>
                    <a href="">royal meadows</a>
                </div>
                <div class="other-projects">
                    <a href="#">urban<br> resorts</a>
                    <a href="#">coastal<br> resorts</a>
                    <a href="#">gated<br> resorts</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
