@extends('layouts.master')


@section('content')


    @if($layout=='boards')
        <div class="page-content">
            <div class="container">
                <div class="inner-page">
                    <div class="subsc-title">board of directors</div>

                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="director">
                                <span class="director-name">Mr.Mahmoud Abdelnasser</span>
                                <span class="director-title">chairman founding chairman founding chairman founding</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-md-offset">
                            <div class="director">
                                <span class="director-name">Mr.Mahmoud Abdelnasser</span>
                                <span class="director-title">chairman founding chairman founding chairman founding</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset">
                            <div class="director">
                                <span class="director-name">Mr.Mahmoud Abdelnasser</span>
                                <span class="director-title">chairman founding chairman founding chairman founding</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset">
                            <div class="director">
                                <span class="director-name">Mr.Mahmoud Abdelnasser</span>
                                <span class="director-title">chairman founding chairman founding chairman founding</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 ">
                            <div class="director">
                                <span class="director-name">Mr.Mahmoud Abdelnasser</span>
                                <span class="director-title">chairman founding chairman founding chairman founding</span>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="director">
                                <span class="director-name">Mr.Mahmoud Abdelnasser</span>
                                <span class="director-title">chairman founding chairman founding chairman founding</span>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="director">
                                <span class="director-name">Mr.Mahmoud Abdelnasser</span>
                                <span class="director-title">chairman founding chairman founding chairman founding</span>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="director">
                                <span class="director-name">Mr.Mahmoud Abdelnasser</span>
                                <span class="director-title">chairman founding chairman founding chairman founding</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="director">
                                <span class="director-name">Mr.Mahmoud Abdelnasser</span>
                                <span class="director-title">chairman founding chairman founding chairman founding</span>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="director">
                                <span class="director-name">Mr.Mahmoud Abdelnasser</span>
                                <span class="director-title">chairman founding chairman founding chairman founding</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- inner page -->
            </div>
        </div>
        <!-- page content -->

    @elseif($layout=='mission-vision')
        <div class="page-content">
            <div class="container">
                <div class="inner-page">
                    <div class="subsc-title">mission & vision</div>
                    <div class="featured-img">
                        <img src="{{ asset('public/assets/site') }}/images/mission.jpg">
                    </div>

                    <div class="miss-vision">
                        <p class="miss-vision-title">Mission</p>
                        <p>Building on previous achievements, Citystars Properties will introduce new living landmarks to Egypt, to replicate the success of Citystars Heliopolis in Cairo. The success of this project has given us a reputation as pioneers and achievers in this field and as a brand that people can trust. This is something we intend to build on and further cement our position as a provider of premium quality and unique mixed-use real estate developments in both urban and resort destinations.</p>
                    </div>

                    <div class="miss-vision">
                        <p class="miss-vision-title">VISION</p>
                        <p>To provide an international standard urban resort and coastal resort experience that is unrivalled in Egypt and the Middle East. We are dedicated to building, managing and maintaining our real estate holdings to exceed the expectations of our clientele and contribute to the welfare of the community as a whole.We were first able to realise this vision after the success of our mega development - Citystars Heliopolis in Cairo, which gave us the base to build from.</p>
                    </div>

                </div>
                <!-- inner page -->
            </div>
        </div>
        <!-- page content -->

    @endif



    {{--<!-- Page Title -->--}}
    {{--<div class="title-bar">--}}
    {{--<div class="container">--}}
    {{--<h1 class="page-title">{{ trans('main.about') }}</h1>--}}
    {{--<div class="">--}}
    {{--<a href="{{ route('frontend.home.get') }}">{{ trans('main.home') }} </a> <span>/</span> <a href="#">{{ trans('main.about') }}</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<br><br>--}}

    {{--<div class="content container">--}}


    {{--<div class="bio">--}}
    {{--<p class="col-md-8 col-md-offset-2 bio-text text-center">--}}
    {{--“Our passion--}}
    {{--are skill, our expertise is in engineering. From startups to Fortune, we--}}
    {{--consult on product testing and design for mass production.”--}}
    {{--</p>--}}
    {{--<div class="clearfix"></div>--}}
    {{--<br>--}}

    {{--<div class="single_image text-center">--}}
    {{--<figure class="">--}}
    {{--<div class="vc_single_image-wrapper   vc_box_border_grey">--}}
    {{--<img width="170" height="56"--}}
    {{--src="http://skilled.aislinthemes.com/app/uploads/2016/02/sviwuevz.png"--}}
    {{--class="vc_single_image-img attachment-full" alt="sviwuevz"--}}
    {{--srcset="http://skilled.aislinthemes.com/app/uploads/2016/02/sviwuevz-100x33.png 100w, http://skilled.aislinthemes.com/app/uploads/2016/02/sviwuevz.png 170w"--}}
    {{--sizes="(max-width: 170px) 100vw, 170px">--}}
    {{--</div>--}}
    {{--</figure>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<br><br>--}}

    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<h2>--}}
    {{--Before we get ahead of ourselves, we want to welcome you to Skilled. While--}}
    {{--nothing can replace thing on-the-lot experience.</h2>--}}

    {{--<p>We--}}
    {{--appreciate you taking the time today to visit our web site. Our goal is to--}}
    {{--give you an interactive tour of our new and used inventory, as well as allow--}}
    {{--you to conveniently get a quote, schedule a service appointment, or apply--}}
    {{--for financing. The search for a luxury car is filled with high expectations.--}}
    {{--Undoubtedly, that has a lot to do with the vehicles you are considering, but--}}
    {{--at Motors, we think you should also have pretty high expectations for your--}}
    {{--dealership.</p>--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}

    {{--<p>Our goal is--}}
    {{--to give you an interactive tour of our new and used inventory, as well as--}}
    {{--allow you to conveniently get a quote, schedule a service appointment, or--}}
    {{--apply for financing. The search for a luxury car is filled with high--}}
    {{--expectations. Undoubtedly, that has a lot to do with the vehicles you are--}}
    {{--considering, but at Motors, we think you should also have pretty high--}}
    {{--expectations for your dealership.</p>--}}
    {{--<p>— TANIA&nbsp;ANDREWS, Owner&nbsp;of&nbsp;Skilled</p>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<br><br>--}}

    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="team-block text-center">--}}
    {{--<figure class="wpb_wrapper vc_figure">--}}
    {{--<img class="vc_single_image-img "--}}
    {{--src="http://skilled.aislinthemes.com/app/uploads/2016/02/instructor02circle-215x215.png"--}}
    {{--width="215" height="215" alt="instructor02circle" title="instructor02circle">--}}
    {{--</figure>--}}

    {{--<h2>THORSTEN TAILOR</h2>--}}
    {{--<p>INSTRUCTOR</p>--}}
    {{--<h3 class="headings-line"></h3>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="team-block text-center">--}}
    {{--<figure class="wpb_wrapper vc_figure">--}}
    {{--<img class="vc_single_image-img "--}}
    {{--src="http://skilled.aislinthemes.com/app/uploads/2016/02/instructor02circle-215x215.png"--}}
    {{--width="215" height="215" alt="instructor02circle" title="instructor02circle">--}}
    {{--</figure>--}}

    {{--<h2>THORSTEN TAILOR</h2>--}}
    {{--<p>INSTRUCTOR</p>--}}
    {{--<h3 class="headings-line"></h3>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="team-block text-center">--}}
    {{--<figure class="wpb_wrapper vc_figure">--}}
    {{--<img class="vc_single_image-img "--}}
    {{--src="http://skilled.aislinthemes.com/app/uploads/2016/02/instructor02circle-215x215.png"--}}
    {{--width="215" height="215" alt="instructor02circle" title="instructor02circle">--}}
    {{--</figure>--}}

    {{--<h2>THORSTEN TAILOR</h2>--}}
    {{--<p>INSTRUCTOR</p>--}}
    {{--<h3 class="headings-line"></h3>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<br><br>--}}


@endsection
