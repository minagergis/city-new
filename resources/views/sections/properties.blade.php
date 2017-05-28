@extends('layouts.master')

@section('styles')

@endsection

@section('content')


    <div class="page-content">
        <div class="inner-page">
            <div class="container">
                <div class="subsc-title">
                    <span>La Fontaine</span>
                    <span> New Cairo </span>
                </div>
                <div class="featured-img">
                    <img src="{{ asset('public/assets/site') }}/images/prop-inner-in1.jpg">
                </div>
                <div class="prop-state">sales now open</div>
            </div>

            <div class="tabs-prop">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3"> <!-- required for floating -->
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-left sideways">
                                <li class="active"><a href="#1-v" data-toggle="tab">location & access</a></li>
                                <li><a href="#2-v" data-toggle="tab">residential</a></li>
                                <li><a href="#3-v" data-toggle="tab">offices park</a></li>
                                <li><a href="#4-v" data-toggle="tab">retial & shopping </a></li>
                                <li><a href="#5-v" data-toggle="tab">hotels & resturants </a></li>
                            </ul>
                        </div>

                        <div class="col-xs-9">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="1-v">
                                    <img src="{{ asset('public/assets/site') }}/images/tabs-img-1.jpg">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane" id="2-v">Profile Tab.</div>
                                <div class="tab-pane" id="3-v">Messages Tab.</div>
                                <div class="tab-pane" id="4-v">Settings Tab.</div>
                                <div class="tab-pane" id="5-v">Settings Tab.</div>
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
                            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq8vfrl5gdXny91cZdOIDGptxdRb3VUg8&callback=initMap"></script>
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
                                            <a href="#"><img src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg" class="img-responsive center-block"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <a href="#"><img src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg" class="img-responsive center-block"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <a href="#"><img src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg" class="img-responsive center-block"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <a href="#"><img src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg" class="img-responsive center-block"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <a href="#"><img src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg" class="img-responsive center-block"></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <a href="#"><img src="{{ asset('public/assets/site') }}/images/prop-gallary1.jpg" class="img-responsive center-block"></a>
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
