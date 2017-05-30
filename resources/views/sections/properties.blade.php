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
                    <span> @if(isset($extra_trans['location'])) {{$extra_trans['location']}} @endif </span>
                </div>
                <div class="featured-img">
                    <img src="{{ asset('public/uploads/full/' . $PropertyDetails->media->guid) }}">
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
                                @foreach($extra['facilties'] as $fac)
                                    <div class="fac-{{$fac}}"></div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="small-title">location</div>
                            <div id="map"></div>
                            <script>
                                function initMap() {
                                    var uluru = {lat: {{$extra['prop_lat']}}, lng: {{$extra['prob_long']}}};
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 15,
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
                                    @if(isset($Media))
                                        @foreach($Media as $image)
                                            <div class="item active">
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <a><img
                                                                src="{{ asset('public/uploads/full/' . $image->guid) }}"
                                                                class="img-responsive center-block"></a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

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
                <div class="current-title">{{$PropertyDetails->category[0]->name}}</div>
                <div class="current-projects">
                    @foreach($related_prop as $prop)
                        @if($prop->post_title!=null && $prop->post_title !='')
                        <a href="{{route('frontend.properties.single.get',[$PropertyDetails->category[0]->slug,$prop->slug])}}">{{$prop->post_title}}</a>
                        @endif
                    @endforeach
                </div>
                <div class="other-projects">
                    @foreach($categories as $catt)
                        <a href="{{route('frontend.properties.cat.get',$catt->slug)}}">{{$catt->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
