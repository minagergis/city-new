@extends('layouts.master')


@section('content')


    <div class="page-content">
        <div class="container">
            <div class="inner-page">
                <div class="subsc-title">{{$about->post_title}}</div>
                <div class="featured-img">
                    <img src="{{ asset('public/uploads/full/' . $about->media->guid) }}">
                </div>

                {!! $about->post_content !!}

            </div>
            <!-- inner page -->
        </div>
    </div>
    <!-- page content -->




@endsection
