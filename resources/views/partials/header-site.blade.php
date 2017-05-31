<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>citystars</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="{{ asset('public/assets/site') }}/css/bootstrap.min.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{ asset('public/assets/site') }}/css/style.css">


</head>
<body class="ltr @if(isset($special_class)) {{$special_class}}@endif">
<header class="top">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo"><a href="{{route('frontend.home.get')}}"><img src="{{ asset('public/assets/site') }}/images/logo.png"></a></div>
            <nav class="nav-menu">
                <ul class="menu-list">
                    <li><a href="{{route('frontend.home.get')}}">Home</a></li>
                    <li class="sub-menu">
                        <a @if($pagename=='about') class="active" @endif href="#">About us</a>
                        <ul>
                            <li><a href="{{route('frontend.about.get','mission-and-vision')}}">mission & vision</a></li>
                            <li><a href="{{route('frontend.board.get')}}">board of directors</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a @if($pagename=='properties') class="active" @endif >properties</a>
                        <ul>
                            <?php
                            use Modules\Admin\Models\Category;
                            $prop_cats = Category::where('type', 'properties')->get();
                            ?>
                            @foreach($prop_cats as $cat)
                                <li><a href="{{route('frontend.properties.cat.get',$cat->slug)}}">{{$cat->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="sub-menu"><a @if($pagename=='gallary') class="active" @endif >gallary</a>
                        <ul>
                            <?php
                            $gallary_cats= Category::where('type', 'gallary')->get();
                            ?>
                                @foreach($gallary_cats as $cat_g)
                                    <li><a href="{{route('frontend.gallery.get',$cat_g->slug)}}">{{$cat_g->name}}</a></li>
                                @endforeach
                        </ul>
                    </li>
                    <li><a @if($pagename=='media') class="active" @endif href="{{route('frontend.magazine.get')}}">media</a></li>
                    <li><a @if($pagename=='awards') class="active" @endif href="{{route('frontend.awards.get')}}">international awards</a></li>
                    <li><a @if($pagename=='contact') class="active" @endif href="{{route('frontend.contact.get')}}">Contact Us</a></li>
                </ul>
            </nav>
            <div class="header-controls">
                <div class="share-control"><a href=""><i class="fa fa-share-alt" aria-hidden="true"></i></a></div>
                <div class="youtube-control"><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></div>
                <div class="lang-control"></div>
            </div>
        </div>
    </div>
</header>
<!-- header -->