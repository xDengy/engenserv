@extends('layouts.index')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')
    <section class="banner">
        <img class="banner-img" src="{{asset('/images/banner.png')}}">
        <div class="banner-shadow"></div>
        <div class="container">
            <div class="banner-block">
                <div class="banner-block-text">
                    Ваш надёжный партнёр <br> <b>с 1995 года</b>
                </div>
                <a href="" class="banner-block-btn btn btn--orange btn--round">
                    Перейти в каталог
                </a>
            </div>
        </div>
    </section>
@endsection
