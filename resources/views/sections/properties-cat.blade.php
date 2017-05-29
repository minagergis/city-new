@extends('layouts.master')

@section('styles')

@endsection

@section('content')

    <div class="page-content">
        <div class="container">
            <div class="inner-page">
                <div class="prop-list">
                    @if(isset($urban_resorts))
                        <div class="prop-item">
                            <img src="{{ asset('public/assets/site') }}/images/prop1.jpg">
                            <div class="prop-item-title">
                                <div>urban </br> resorts
                                    <ul>
                                        @foreach($urban_resorts as $urban)
                                            <li><a href="{{route('frontend.properties.single.get',['urban-resorts',$urban->slug])}}" >{{$urban->post_title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(isset($coastal_resorts))
                        <div class="prop-item">
                            <img src="{{ asset('public/assets/site') }}/images/prop2.jpg">
                            <div class="prop-item-title">
                                <div>Coastal </br> resorts
                                    <ul>
                                        @foreach($coastal_resorts as $coastal)
                                            <li><a href="{{route('frontend.properties.single.get',['coastal-resorts',$coastal->slug])}}" >{{$coastal->post_title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(isset($gated_communities))
                        <div class="prop-item">
                            <img src="{{ asset('public/assets/site') }}/images/prop3.jpg">
                            <div class="prop-item-title">
                                <div>gated </br> comunities
                                    <ul>
                                        @foreach($gated_communities as $gated)
                                            <li><a href="{{route('frontend.properties.single.get',['gated-communities',$gated->slug])}}" >{{$gated->post_title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(isset($costal_retreats))

                        <div class="prop-item">
                            <img src="{{ asset('public/assets/site') }}/images/prop4.jpg">
                            <div class="prop-item-title">
                                <div>Coastal </br> retreats
                                    <ul>
                                        @foreach($costal_retreats as $retreats)
                                            <li><a href="{{route('frontend.properties.single.get',['coastal-retreats',$retreats->slug])}}" >{{$retreats->post_title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
            <!-- inner page -->
        </div>
    </div>
    <!-- page content -->
@endsection

@section('scripts')

@endsection
