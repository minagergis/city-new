@extends('layouts.master')


@section('content')

<div class="page-content">
    <div class="container">
        <div class="inner-page">
            <div class="subsc-title">board of directors</div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="director">
                        <span class="director-name">{{$one_one->post_title}}</span>
                        <span class="director-title">{{$one_one->post_excerpt}}</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset">
                    <div class="director">
                        <span class="director-name">{{$two_one->post_title}}</span>
                        <span class="director-title">{{$two_one->post_excerpt}}</span>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset">
                    <div class="director">
                        <span class="director-name">{{$two_two->post_title}}</span>
                        <span class="director-title">{{$two_two->post_excerpt}}</span>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset">
                    <div class="director">
                        <span class="director-name">{{$two_three->post_title}}</span>
                        <span class="director-title">{{$two_three->post_excerpt}}</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 ">
                    <div class="director">
                        <span class="director-name">{{$three_one->post_title}}</span>
                        <span class="director-title">{{$three_one->post_excerpt}}</span>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="director">
                        <span class="director-name">{{$three_two->post_title}}</span>
                        <span class="director-title">{{$three_two->post_excerpt}}</span>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="director">
                        <span class="director-name">{{$three_three->post_title}}</span>
                        <span class="director-title">{{$three_three->post_excerpt}}</span>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="director">
                        <span class="director-name">{{$three_four->post_title}}</span>
                        <span class="director-title">{{$three_four->post_excerpt}}</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <div class="director">
                        <span class="director-name">{{$four_one->post_title}}</span>
                        <span class="director-title">{{$four_one->post_excerpt}}</span>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="director">
                        <span class="director-name">{{$four_two->post_title}}</span>
                        <span class="director-title">{{$four_two->post_excerpt}}</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- inner page -->
    </div>
</div>


@endsection