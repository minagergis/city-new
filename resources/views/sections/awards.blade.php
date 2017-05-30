@extends('layouts.master')


@section('content')


    <div class="page-content">
        <div class="inner-page">
            <div class="container">
                <div class="subsc-title">
                    <span>international awards</span>
                </div>
                <div class="featured-img">
                    <img src="{{ asset('public/assets/site') }}/images/awwards.jpg">
                </div>

                <div class="awwards">
                    @foreach($awards as $award)
                        <div class="awward-group">
                            <div class="awward-group-title">
                                <span>{{$award->name}}</span>
                                <span>{{$award->description}}</span>
                            </div>
                            <div class="awward-group-items">
                                @foreach($award->posts  as $icon)
                                    <div class="awward-item">
                                        @if($icon->post_have_thumbnail())
                                        <img src="{{ asset('public/uploads/full/' . $icon->media->guid) }}">
                                        @endif
                                        <p>{{$icon->post_title}}</p>
                                    </div>
                                    @endforeach

                            </div>
                        </div>
                        <!-- awwards group -->
                    @endforeach


                </div>
                <!-- awwards -->
            </div>


        </div>
        <!-- inner page -->
    </div>
    <!-- page content -->


@endsection
