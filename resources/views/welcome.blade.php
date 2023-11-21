@extends('layouts.index')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')
    <section class="banner">
        <img class="banner-img" src="{{asset('/images/banner.png')}}" alt="">
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
    <section class="advantages">
        <div class="container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="advantage">
                            <div class="advantage-icon">
                                <img src="{{asset('/images/adv1.png')}}" alt="" />
                            </div>
                            <div class="advantage-text">
                                Контроль качества
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantage">
                            <div class="advantage-icon">
                                <img src="{{asset('/images/adv2.png')}}" alt="" />
                            </div>
                            <div class="advantage-text">
                                Собственное производство
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantage">
                            <div class="advantage-icon">
                                <img src="{{asset('/images/adv3.png')}}" alt="" />
                            </div>
                            <div class="advantage-text">
                                Минимальные сроки отгрузки
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="news-wrapper">
                <div class="news-column">
                    <div class="news-item">
                        <img src="{{asset('/images/news1.png')}}" alt="">
                        <div class="news-block">
                            <div class="news-btn btn btn btn--orange btn--round">
                                Новости производства
                            </div>
                            <div class="news-name">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-column">
                    <div class="news-item">
                        <img src="{{asset('/images/news2.png')}}" alt="">
                        <div class="news-block">
                            <div class="news-btn btn btn btn--orange btn--round">
                                Новости производства
                            </div>
                            <div class="news-name">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </div>
                        </div>
                    </div>
                    <div class="news-item">
                        <img src="{{asset('/images/news3.png')}}" alt="">
                        <div class="news-block">
                            <div class="news-btn btn btn btn--orange btn--round">
                                Новости производства
                            </div>
                            <div class="news-name">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </div>
                        </div>
                    </div>
                    <div class="news-item">
                        <img src="{{asset('/images/news4.png')}}" alt="">
                        <div class="news-block">
                            <div class="news-btn btn btn btn--orange btn--round">
                                Новости производства
                            </div>
                            <div class="news-name">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
