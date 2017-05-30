@extends('layouts.index')

@section('styles')

@endsection

@section('content')


    <div id="slide-window-home">

        <ol id="slides" start="1">
            @if(isset($mainSlider))
                <li class="main-slide color-0 alive"
                    style="background-image:url({{ asset('public/uploads/full/' . $mainSlider->media->guid) }});">
                    <div class="slide-one-only">
                        <div class="slide-one-only-img">
                            <img src="{{ asset('public/assets/site') }}/images/logo-slider1.png">
                        </div>
                        <p>{!!  $mainSlider->post_content  !!}</p>
                    </div>
                </li>
            @endif
            @foreach($slider as $sl)
                <li class="main-slide color-1"
                    style="background-image:url({{ asset('public/uploads/full/' . $sl->media->guid) }});">
                    <div class="static-caption">
                        <span>{!! $sl->post_content  !!}</span>
                    </div>
                </li>
            @endforeach

        </ol>

        <div class="slides-caption">
            <div class="container">
                <div class="caption-1 active"></div>
                @foreach($slider as $sl_title)
                    <div class="caption-2"><span>{{$sl_title->post_title}}</span></div>
                @endforeach
            </div>
        </div>

        <div class="slider-logo"><img src="{{ asset('public/assets/site') }}/images/logo-icon.png"></div>
        <div class="help">
            <div class="help-header">
                <i></i>
                <div class="help-header-tit">
                    <span>how can we help</span>
                    <span class="bold">you ?</span>
                </div>
            </div>
            <div class="help-form">
                <div class="alert alert-success hidden" id="contactSuccess">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>
                <div class="alert alert-error hidden" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                </div>
                <form id="ajax-contact" role="form" method="post" action="{{route('frontend.contact.post')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input id="name" name="name" type="text" placeholder="Name">
                    <input id="email" name="email" type="text" placeholder="Email">
                    <input name="phone" id="phone" type="text" placeholder="Mobile">
                    <textarea id="message" name="message" placeholder="message"></textarea>
                    <input type="submit" id="submit_contact" value="Send">
                </form>
            </div>
        </div>
        <!-- <span class="nav-arrows glyphicon glyphicon-chevron-left" id="left"></span>
        <span class="nav-arrows glyphicon glyphicon-chevron-right" id="right"></span> -->

    </div>
    <!-- slider -->


    {{--<section id="contact-form">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="title">--}}
    {{--<h2>{{ trans('main.contact_us') }}</h2>--}}
    {{--<p>{!! trans('main.fake_content') !!}</p>--}}
    {{--</div>--}}
    {{--<div class="col-md-6 col">--}}
    {{--<!-- map -->--}}
    {{--<div class="map">--}}
    {{--<div id="googleMap"></div>--}}
    {{--</div><!--/map-->--}}

    {{--</div>--}}
    {{--<div class="col-md-6">--}}
    {{--<form method="post" action="">--}}
    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
    {{--<input type="text" class="form-control" id="name" name="name" placeholder="Name">--}}
    {{--<div class="error" id ="name_error"></div>--}}
    {{--<input type="text" class="form-control" id="email" name="email" placeholder="Email">--}}
    {{--<div class="error" id ="email_error"></div>--}}
    {{--<textarea class="form-control" rows="3" id="msg" name="msg" placeholder="Message"></textarea>--}}
    {{--<div class="error" id ="msg_error"></div>--}}
    {{--<button class="btn btn-primary" type="submit">--}}
    {{--<span class="btn-text">{{ trans('main.send_msg') }}</span>--}}
    {{--<div class="la-ball-fall btn-loader hidden">--}}
    {{--<div></div>--}}
    {{--<div></div>--}}
    {{--<div></div>--}}
    {{--</div>--}}
    {{--</button>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

@endsection

@section('scripts')
    {{--<script src="{{ asset('public/assets/site') }}/js/sweetalert.min.js"></script>--}}
    <script>

    </script>
@endsection