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
                                @foreach($award->po)
                            <div class="awward-item">
                                <img src="{{ asset('public/assets/site') }}/images/awwards-g1-1.png">
                                <p>Best Business Hotel in Cairo 2014 Award</p>
                            </div>


                        </div>
                    </div>
                    <!-- awwards group -->
                    @endforeach
                    <div class="awward-group">
                        <div class="awward-group-title">
                            <span>Citystars Properties Awards</span>
                        </div>
                        <div class="awward-group-items">

                            <div class="awward-item">
                                <img src="{{ asset('public/assets/site') }}/images/awwards-g2-1.png">
                                <p>CITYSCAPE AWARDS– REAL ESTATE EGYPT–WINNER 2012 Retail (Built)</p>
                            </div>
                            <div class="awward-item">
                                <img src="{{ asset('public/assets/site') }}/images/awwards-g2-2.png">
                                <p>CITYSCAPE AWARDS– REAL ESTATE EGYPT–WINNER 2012 Commercial</p>
                            </div>
                            <div class="awward-item">
                                <img src="{{ asset('public/assets/site') }}/images/awwards-g2-3.png">
                                <p>CITYSCAPE AWARDS – REAL ESTATEEGYPT – WINNER 2013 Commercia</p>
                            </div>

                        </div>
                    </div>
                    <!-- awwards group -->

                    <div class="awward-group">
                        <div class="awward-group-title">
                            <span>Citystars Hotels</span>
                            <span>Hotels Awards in 2014 Holiday Inn Cairo Citystars</span>
                        </div>
                        <div class="awward-group-items">

                            <div class="awward-item">
                                <img src="{{ asset('public/assets/site') }}/images/awwards-g1-2.png">
                                <p>Certificate of Excellence</p>
                            </div>
                            <div class="awward-item">
                                <img src="{{ asset('public/assets/site') }}/images/awwards-g3-2.png">
                                <p> Award - Hotel of the Year for 2014 for highest occupancy rate</p>
                            </div>
                            <div class="awward-item">
                                <img src="{{ asset('public/assets/site') }}/images/awwards-g3-3.png">
                                <p>2014 Award of Excellence</p>
                            </div>

                        </div>
                    </div>
                    <!-- awwards group -->

                </div>
                <!-- awwards -->
            </div>


        </div>
        <!-- inner page -->
    </div>
    <!-- page content -->


@endsection
