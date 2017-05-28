@extends('layouts.master')

@section('styles')

@endsection

@section('content')

    <div class="page-content">
        <div class="overlay-bg"></div>
        <div class="container-fluid nopadding">
            <div class="gallary-items">
                <div class="">
                    <div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="0">
                        <a href="#">
                            <img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"
                                 class="img-responsive scallable">
                            <div class="gallary-title">
                                <p>dyar park 1</p>
                            </div>
                            <div class="gallary-desc">
                                <div class="gallary-item-hover">
                                    <div>
                                        <p class="gallary-name">dyar park 1<span class='read-more'>read more</span></p>
                                        <p class="gallary-description">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="gallary-item-more">

                            <div id="myCarousel" class="carousel slide">

                                <!-- Wrapper for Slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="fill">
                                            <img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"
                                                 class="img-responsive">
                                        </div>
                                        <div class="carousel-caption gallary-item-more-caption">
                                            <h2>dyar park</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="fill">
                                            <img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"
                                                 class="img-responsive">
                                        </div>
                                        <div class="carousel-caption gallary-item-more-caption">
                                            <h2>dyar park</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="fill">
                                            <img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"
                                                 class="img-responsive">
                                        </div>
                                        <div class="carousel-caption gallary-item-more-caption">
                                            <h2>dyar park</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control arrows-stars" href="#myCarousel" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                                <a class="right carousel-control arrows-stars" href="#myCarousel" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>

                                <!-- options -->
                                <div class="gallary-item-more-options">
                                    <div class="gallary-item-image-expand">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </div>
                                    <div class="gallary-item-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        <span>close</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="1">
                        <a href="#">
                            <img src="{{ asset('public/assets/site') }}/images/prop-inner2.jpg"
                                 class="img-responsive scallable">
                            <div class="gallary-title">
                                <p>dyar park 2</p>
                            </div>
                            <div class="gallary-desc">
                                <div class="gallary-item-hover">
                                    <div>
                                        <p class="gallary-name">dyar park 2<span class='read-more'>read more</span></p>
                                        <p class="gallary-description">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="gallary-item-more">


                            <div id="myCarousel" class="carousel slide">

                                <!-- Wrapper for Slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="fill">
                                            <img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"
                                                 class="img-responsive">
                                        </div>
                                        <div class="carousel-caption gallary-item-more-caption">
                                            <h2>dyar park</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="fill">
                                            <img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"
                                                 class="img-responsive">
                                        </div>
                                        <div class="carousel-caption gallary-item-more-caption">
                                            <h2>dyar park</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="fill">
                                            <img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"
                                                 class="img-responsive">
                                        </div>
                                        <div class="carousel-caption gallary-item-more-caption">
                                            <h2>dyar park</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control arrows-stars" href="#myCarousel" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                                <a class="right carousel-control arrows-stars" href="#myCarousel" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>

                                <!-- options -->
                                <div class="gallary-item-more-options">
                                    <div class="gallary-item-image-expand">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </div>
                                    <div class="gallary-item-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        <span>close</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="2">
                        <a href="#">
                            <img src="{{ asset('public/assets/site') }}/images/prop-inner3.jpg"
                                 class="img-responsive scallable">
                            <div class="gallary-title">
                                <p>dyar park 3</p>
                            </div>
                            <div class="gallary-desc">
                                <div class="gallary-item-hover">
                                    <div>
                                        <p class="gallary-name">dyar park 3<span class='read-more'>read more</span></p>
                                        <p class="gallary-description">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="gallary-item-more">


                            <div id="myCarousel" class="carousel slide">

                                <!-- Wrapper for Slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="fill">
                                            <img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"
                                                 class="img-responsive">
                                        </div>
                                        <div class="carousel-caption gallary-item-more-caption">
                                            <h2>dyar park</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="fill">
                                            <img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"
                                                 class="img-responsive">
                                        </div>
                                        <div class="carousel-caption gallary-item-more-caption">
                                            <h2>dyar park</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="fill">
                                            <img src="{{ asset('public/assets/site') }}/images/prop-inner1.jpg"
                                                 class="img-responsive">
                                        </div>
                                        <div class="carousel-caption gallary-item-more-caption">
                                            <h2>dyar park</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control arrows-stars" href="#myCarousel" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                                <a class="right carousel-control arrows-stars" href="#myCarousel" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>

                                <!-- options -->
                                <div class="gallary-item-more-options">
                                    <div class="gallary-item-image-expand">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </div>
                                    <div class="gallary-item-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        <span>close</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="3">
                        <a href="#">
                            <img src="{{ asset('public/assets/site') }}/images/prop-inner4.jpg"
                                 class="img-responsive scallable">
                            <div class="gallary-title">
                                <p>dyar park 4</p>
                            </div>
                            <div class="gallary-desc">
                                <div class="gallary-item-hover">
                                    <div>
                                        <p class="gallary-name">dyar park 4<span class='read-more'>read more</span></p>
                                        <p class="gallary-description">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="gallary-item-more">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="4">
                        <a href="#">
                            <img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"
                                 class="img-responsive scallable">
                            <div class="gallary-title">
                                <p>dyar park 5</p>
                            </div>
                            <div class="gallary-desc">
                                <div class="gallary-item-hover">
                                    <div>
                                        <p class="gallary-name">dyar park 5<span class='read-more'>read more</span></p>
                                        <p class="gallary-description">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="gallary-item-more">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="5">
                        <a href="#">
                            <img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"
                                 class="img-responsive scallable">
                            <div class="gallary-title">
                                <p>dyar park 6</p>
                            </div>
                            <div class="gallary-desc">
                                <div class="gallary-item-hover">
                                    <div>
                                        <p class="gallary-name">dyar park 6<span class='read-more'>read more</span></p>
                                        <p class="gallary-description">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="gallary-item-more">
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="6">
                        <a href="#">
                            <img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"
                                 class="img-responsive scallable">
                            <div class="gallary-title">
                                <p>dyar park 7</p>
                            </div>
                            <div class="gallary-desc">
                                <div class="gallary-item-hover">
                                    <div>
                                        <p class="gallary-name">dyar park 7<span class='read-more'>read more</span></p>
                                        <p class="gallary-description">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="gallary-item-more">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="7">
                        <a href="#">
                            <img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"
                                 class="img-responsive scallable">
                            <div class="gallary-title">
                                <p>dyar park 8</p>
                            </div>
                            <div class="gallary-desc">
                                <div class="gallary-item-hover">
                                    <div>
                                        <p class="gallary-name">dyar park 8<span class='read-more'>read more</span></p>
                                        <p class="gallary-description">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="gallary-item-more">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="8">
                        <a href="#">
                            <img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"
                                 class="img-responsive scallable">
                            <div class="gallary-title">
                                <p>dyar park 9</p>
                            </div>
                            <div class="gallary-desc">
                                <div class="gallary-item-hover">
                                    <div>
                                        <p class="gallary-name">dyar park 9<span class='read-more'>read more</span></p>
                                        <p class="gallary-description">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="gallary-item-more">
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="col-xs-12 col-sm-6 col-md-4 nopadding gallary-item " id="9">
                        <a href="#">
                            <img src="{{ asset('public/assets/site') }}/images/prop-inner5.jpg"
                                 class="img-responsive scallable">
                            <div class="gallary-title">
                                <p>dyar park 10</p>
                            </div>
                            <div class="gallary-desc">
                                <div class="gallary-item-hover">
                                    <div>
                                        <p class="gallary-name">dyar park 10<span class='read-more'>read more</span></p>
                                        <p class="gallary-description">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="gallary-item-more">
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

@endsection

@section('scripts')

@endsection
