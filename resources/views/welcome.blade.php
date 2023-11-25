@extends('layouts.index')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}" media="screen">
@endsection

@section('scripts')
    <script src="{{ asset('js/index.js') }}"></script>
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
                                <img src="{{asset('/images/adv1.png')}}" alt=""/>
                            </div>
                            <div class="advantage-text">
                                Контроль качества
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantage">
                            <div class="advantage-icon">
                                <img src="{{asset('/images/adv2.png')}}" alt=""/>
                            </div>
                            <div class="advantage-text">
                                Собственное производство
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantage">
                            <div class="advantage-icon">
                                <img src="{{asset('/images/adv3.png')}}" alt=""/>
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
                            <div class="news-btn btn btn btn--blue btn--round">
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
    <section class="about">
        <div class="container">
            <div class="about-block">
                <div class="about-text">
                    <div class="about-title">
                        Title Name
                    </div>
                    <div class="about-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et <b>dolore magna aliqua</b>. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. <b>Excepteur sint occaecat</b> cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </div>
                    <div class="about-quality">
                        <div class="quality">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.6"
                                      d="M1.77273 7.42857C1.77273 4.30493 4.30493 1.77273 7.42857 1.77273H18.5714C21.6951 1.77273 24.2273 4.30493 24.2273 7.42857V18.5714C24.2273 21.6951 21.6951 24.2273 18.5714 24.2273H7.42857C4.30493 24.2273 1.77273 21.6951 1.77273 18.5714V7.42857Z"
                                      stroke="#FF5C00" stroke-width="3.54545"/>
                            </svg>
                            Качество
                        </div>
                        <div class="quality">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.6"
                                      d="M1.77273 7.42857C1.77273 4.30493 4.30493 1.77273 7.42857 1.77273H18.5714C21.6951 1.77273 24.2273 4.30493 24.2273 7.42857V18.5714C24.2273 21.6951 21.6951 24.2273 18.5714 24.2273H7.42857C4.30493 24.2273 1.77273 21.6951 1.77273 18.5714V7.42857Z"
                                      stroke="#2749A3" stroke-width="3.54545"/>
                            </svg>
                            Качество
                        </div>
                        <div class="quality">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.6"
                                      d="M1.77273 7.42857C1.77273 4.30493 4.30493 1.77273 7.42857 1.77273H18.5714C21.6951 1.77273 24.2273 4.30493 24.2273 7.42857V18.5714C24.2273 21.6951 21.6951 24.2273 18.5714 24.2273H7.42857C4.30493 24.2273 1.77273 21.6951 1.77273 18.5714V7.42857Z"
                                      stroke="#FF5C00" stroke-width="3.54545"/>
                            </svg>
                            Качество
                        </div>
                    </div>
                    <div class="about-btn about-btn--colored btn btn--round btn--bordered">
                        Кнопка действия
                    </div>
                </div>
                <div class="about-image">
                    <img class="gif" src="{{asset('/images/about1.gif')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="partnership">
        <div class="container">
            <div class="partnership-block">
                <div class="partnership-title">
                    Стать нашим партнёром - легко
                </div>
                <div class="partnership-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="partnership-link">
                    <a href="">Подробнее</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="about-block">
                <div class="about-text">
                    <div class="about-title">
                        Title Name
                    </div>
                    <div class="about-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et <b>dolore magna aliqua</b>. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. <b>Excepteur sint occaecat</b> cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </div>
                    <div class="about-btn btn btn--blue btn--round btn--bordered">
                        Кнопка действия
                    </div>
                </div>
                <div class="about-image">
                    <img class="gif" src="{{asset('/images/about2.gif')}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
