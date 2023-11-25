@extends('layouts.main')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('/css/catalogDetail.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/catalogSection.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
@endsection

@section('scripts')
    <script src="{{ asset('/js/catalogDetail.js') }}"></script>
@endsection

@section('content')
    <section class="catalog">
        <div class="container">
            <div class="catalog-container">
                <div class="catalog-sections">
                    <div class="section-item">
                        <div class="section-info">
                            <div class="section-title">
                                Звонки, ревуны, сирены
                            </div>
                            <div class="section-arrow">
                                <svg width="24" height="14" viewBox="0 0 24 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9393 13.0607C11.5251 13.6464 12.4749 13.6464 13.0607 13.0607L22.6066 3.51472C23.1924 2.92893 23.1924 1.97919 22.6066 1.3934C22.0208 0.807611 21.0711 0.807611 20.4853 1.3934L12 9.87868L3.51472 1.3934C2.92893 0.807611 1.97919 0.807611 1.3934 1.3934C0.807611 1.97919 0.807611 2.92893 1.3934 3.51472L10.9393 13.0607ZM10.5 10V12H13.5V10H10.5Z"
                                        fill="#FF5C00"/>
                                </svg>
                            </div>
                        </div>
                        <div class="section-wrapper">
                            <div class="subsection-item">
                                МЗМ
                            </div>
                            <div class="subsection-item">
                                Колокол
                            </div>
                            <div class="subsection-item">
                                Колокол КЛП, КЛФ
                            </div>
                        </div>
                    </div>
                    <div class="section-item">
                        <div class="section-info">
                            <div class="section-title">
                                Звонки, ревуны, сирены
                            </div>
                            <div class="section-arrow">
                                <svg width="24" height="14" viewBox="0 0 24 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9393 13.0607C11.5251 13.6464 12.4749 13.6464 13.0607 13.0607L22.6066 3.51472C23.1924 2.92893 23.1924 1.97919 22.6066 1.3934C22.0208 0.807611 21.0711 0.807611 20.4853 1.3934L12 9.87868L3.51472 1.3934C2.92893 0.807611 1.97919 0.807611 1.3934 1.3934C0.807611 1.97919 0.807611 2.92893 1.3934 3.51472L10.9393 13.0607ZM10.5 10V12H13.5V10H10.5Z"
                                        fill="#FF5C00"/>
                                </svg>
                            </div>
                        </div>
                        <div class="section-wrapper">
                            <div class="subsection-item">
                                МЗМ
                            </div>
                            <div class="subsection-item">
                                Колокол
                            </div>
                            <div class="subsection-item">
                                Колокол КЛП, КЛФ
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-block">
                    @include('includes.breadcrumbs', ['links' => [
                        [
                            'title' => 'Главная',
                            'link' => '/',
                        ],
                        [
                            'title' => 'Каталог',
                            'link' => '/catalog/',
                        ],
                        [
                            'title' => 'Товар',
                        ],
                    ]])
                    <div class="catalog-detail">
                        <div class="catalog-info-wrapper">
                            <div class="img-wrapper">
                                <div class="swiper max-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset('/images/catalog1.png')}}" alt=""/>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('/images/catalog1.png')}}" alt=""/>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('/images/catalog1.png')}}" alt=""/>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('/images/catalog1.png')}}" alt=""/>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('/images/catalog1.png')}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="swiper min-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset('/images/catalog1.png')}}" alt=""/>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('/images/catalog1.png')}}" alt=""/>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('/images/catalog1.png')}}" alt=""/>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('/images/catalog1.png')}}" alt=""/>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('/images/catalog1.png')}}" alt=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-info">
                                <div class="title-wrapper">
                                    <h1 class="detail-title">
                                        МКЮР-301591.000
                                    </h1>
                                    <div class="detail-tag btn btn--orange">
                                        Новинка
                                    </div>
                                </div>
                                <div class="detail-price">
                                    180 ₽
                                </div>
                                <div class="detail-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum
                                </div>
                                <div class="detail-add-to-cart btn btn--blue">
                                    Добавить в корзину
                                </div>
                            </div>
                        </div>
                        <div class="other-items">
                            <div class="other-item">
                                <div class="other-title">
                                    Технические характеристики
                                </div>
                                <div class="other-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur.
                                    <div class="other-show-text">
                                        Свернуть
                                    </div>
                                </div>
                                <div class="other-show-btn btn btn--blue">
                                    <svg width="24" height="14" viewBox="0 0 24 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.0607 0.93934C12.4749 0.353553 11.5251 0.353553 10.9393 0.93934L1.3934 10.4853C0.807611 11.0711 0.807611 12.0208 1.3934 12.6066C1.97918 13.1924 2.92893 13.1924 3.51472 12.6066L12 4.12132L20.4853 12.6066C21.0711 13.1924 22.0208 13.1924 22.6066 12.6066C23.1924 12.0208 23.1924 11.0711 22.6066 10.4853L13.0607 0.93934ZM13.5 3L13.5 2L10.5 2L10.5 3L13.5 3Z"
                                            fill="white"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="other-item">
                                <div class="other-title">
                                    Принципиальная схема
                                </div>
                                <div class="other-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur.
                                    <div class="other-show-text">
                                        Свернуть
                                    </div>
                                </div>
                                <div class="other-show-btn btn btn--blue">
                                    <svg width="24" height="14" viewBox="0 0 24 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.0607 0.93934C12.4749 0.353553 11.5251 0.353553 10.9393 0.93934L1.3934 10.4853C0.807611 11.0711 0.807611 12.0208 1.3934 12.6066C1.97918 13.1924 2.92893 13.1924 3.51472 12.6066L12 4.12132L20.4853 12.6066C21.0711 13.1924 22.0208 13.1924 22.6066 12.6066C23.1924 12.0208 23.1924 11.0711 22.6066 10.4853L13.0607 0.93934ZM13.5 3L13.5 2L10.5 2L10.5 3L13.5 3Z"
                                            fill="white"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
