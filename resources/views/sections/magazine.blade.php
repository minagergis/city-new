@extends('layouts.master')

@section('styles')

@endsection

@section('content')

<div class="page-content">
    <div class="container">
        <div class="inner-page">
            <div class="magzin-items">
                <div class="magzin-item" data-section-name="home1">
                    <div class="row">
                        <div class="magzin-info col-md-3">
                            <div class="magzin-logo"><img src="{{ asset('public/assets/site') }}/images/magazin-logo.png"></div>
                            <div class="magzin-title">Issue 01</div>
                            <div class="magzin-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat</div>
                        </div>
                        <div class="magzin-cover-img col-md-9"><img src="{{ asset('public/assets/site') }}/images/magazin1.jpg"></div>
                    </div>
                </div>

                <div class="magzin-item" data-section-name="home2">
                    <div class="row">
                        <div class="magzin-info col-md-3">
                            <div class="magzin-logo"><img src="{{ asset('public/assets/site') }}/images/magazin-logo2.png"></div>
                            <div class="magzin-title">Issue 01</div>
                            <div class="magzin-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat</div>
                        </div>
                        <div class="magzin-cover-img col-md-9"><img src="{{ asset('public/assets/site') }}/images/magazin1.jpg"></div>
                    </div>
                </div>

                <div class="magzin-item" data-section-name="home3">
                    <div class="row">
                        <div class="magzin-info col-md-3">
                            <div class="magzin-logo"><img src="{{ asset('public/assets/site') }}/images/magazin-logo.png"></div>
                            <div class="magzin-title">Issue 01</div>
                            <div class="magzin-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat</div>
                        </div>
                        <div class="magzin-cover-img col-md-9"><img src="{{ asset('public/assets/site') }}/images/magazin1.jpg"></div>
                    </div>
                </div>

            </div>




        </div>
        <!-- inner page -->
    </div>
</div>
<!-- page content -->

@endsection

@section('scripts')

@endsection