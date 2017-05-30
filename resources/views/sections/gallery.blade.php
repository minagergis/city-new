@extends('layouts.master')

@section('styles')

@endsection

@section('content')
    <?php
    $total = count($gallery);
    $m = 1;
    ?>
    <div class="page-content">
        <div class="overlay-bg"></div>
        <div class="container-fluid nopadding">
            <div class="gallary-items">
                @foreach($gallery as $gall)
                    @if($m==1)
                        <div class="">
                            @endif

                            <div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="0">
                                <a href="#">
                                    <img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"
                                         class="img-responsive scallable">
                                    <div class="gallary-title">
                                        <p>{{$gall->post_title}}</p>
                                    </div>
                                    <div class="gallary-desc">
                                        <div class="gallary-item-hover">
                                            <div>
                                                <p class="gallary-name">{{$gall->post_title}}
                                                    <span class='read-more' url-action="{{route('frontend.gallery.inner.get',$gall->post_id)}}">read more</span>
                                                </p>
                                                <p class="gallary-description">{{$gall->post_excerpt}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="gallary-item-more">
                                </div>
                            </div>
                            @if($m%3==0)
                        </div>
                        <div class="">
                            @endif
                            @if($m==$total)
                        </div>
                    @endif
                    <?php $m++; ?>
                @endforeach
                {{--<div class="">--}}
                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="3">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner4.jpg"--}}
                {{--class="img-responsive scallable">--}}
                {{--<div class="gallary-title">--}}
                {{--<p>dyar park 4</p>--}}
                {{--</div>--}}
                {{--<div class="gallary-desc">--}}
                {{--<div class="gallary-item-hover">--}}
                {{--<div>--}}
                {{--<p class="gallary-name">dyar park 4<span--}}
                {{--class='read-more'>read more</span>--}}
                {{--</p>--}}
                {{--<p class="gallary-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--<div class="gallary-item-more">--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="4">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"--}}
                {{--class="img-responsive scallable">--}}
                {{--<div class="gallary-title">--}}
                {{--<p>dyar park 5</p>--}}
                {{--</div>--}}
                {{--<div class="gallary-desc">--}}
                {{--<div class="gallary-item-hover">--}}
                {{--<div>--}}
                {{--<p class="gallary-name">dyar park 5<span--}}
                {{--class='read-more'>read more</span>--}}
                {{--</p>--}}
                {{--<p class="gallary-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--<div class="gallary-item-more">--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="5">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"--}}
                {{--class="img-responsive scallable">--}}
                {{--<div class="gallary-title">--}}
                {{--<p>dyar park 6</p>--}}
                {{--</div>--}}
                {{--<div class="gallary-desc">--}}
                {{--<div class="gallary-item-hover">--}}
                {{--<div>--}}
                {{--<p class="gallary-name">dyar park 6<span--}}
                {{--class='read-more'>read more</span>--}}
                {{--</p>--}}
                {{--<p class="gallary-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--<div class="gallary-item-more">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="">--}}
                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="6">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"--}}
                {{--class="img-responsive scallable">--}}
                {{--<div class="gallary-title">--}}
                {{--<p>dyar park 7</p>--}}
                {{--</div>--}}
                {{--<div class="gallary-desc">--}}
                {{--<div class="gallary-item-hover">--}}
                {{--<div>--}}
                {{--<p class="gallary-name">dyar park 7<span--}}
                {{--class='read-more'>read more</span>--}}
                {{--</p>--}}
                {{--<p class="gallary-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--<div class="gallary-item-more">--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="7">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"--}}
                {{--class="img-responsive scallable">--}}
                {{--<div class="gallary-title">--}}
                {{--<p>dyar park 8</p>--}}
                {{--</div>--}}
                {{--<div class="gallary-desc">--}}
                {{--<div class="gallary-item-hover">--}}
                {{--<div>--}}
                {{--<p class="gallary-name">dyar park 8<span--}}
                {{--class='read-more'>read more</span>--}}
                {{--</p>--}}
                {{--<p class="gallary-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--<div class="gallary-item-more">--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="8">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"--}}
                {{--class="img-responsive scallable">--}}
                {{--<div class="gallary-title">--}}
                {{--<p>dyar park 9</p>--}}
                {{--</div>--}}
                {{--<div class="gallary-desc">--}}
                {{--<div class="gallary-item-hover">--}}
                {{--<div>--}}
                {{--<p class="gallary-name">dyar park 9<span--}}
                {{--class='read-more'>read more</span>--}}
                {{--</p>--}}
                {{--<p class="gallary-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--<div class="gallary-item-more">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="">--}}
                {{--<div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="9">--}}
                {{--<a href="#">--}}
                {{--<img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"--}}
                {{--class="img-responsive scallable">--}}
                {{--<div class="gallary-title">--}}
                {{--<p>dyar park 10</p>--}}
                {{--</div>--}}
                {{--<div class="gallary-desc">--}}
                {{--<div class="gallary-item-hover">--}}
                {{--<div>--}}
                {{--<p class="gallary-name">dyar park 10<span--}}
                {{--class='read-more'>read more</span>--}}
                {{--</p>--}}
                {{--<p class="gallary-description">Lorem ipsum dolor sit amet, consectetur--}}
                {{--adipisicing--}}
                {{--elit, sed do eiusmod--}}
                {{--tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--<div class="gallary-item-more">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

            </div>


        </div>
    </div>

@endsection

@section('scripts')
    <script>
        alert('mina');
    </script>

@endsection
