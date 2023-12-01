@extends('layouts.main')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('/css/news.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
@endsection

@section('content')
    <section class="news">
        <div class="container">
            <div class="news-container">
                @include('includes.breadcrumbs', ['links' => [
                    [
                        'title' => 'Главная',
                        'link' => '/',
                    ],
                    [
                        'title' => 'Новости',
                    ],
                ]])
                <h1>
                    Новости
                </h1>
                <div class="news-items">
                    <div class="news-item">
                        <div class="news-text">
                            <div class="news-title">
                                Коробки испытательные с прозрачной крышкой
                            </div>
                            <div class="news-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                            </div>
                        </div>
                        <div class="news-img">
                            <img src="{{asset('/images/news5.png')}}" alt="">
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-text">
                            <div class="news-title">
                                Коробки испытательные с прозрачной крышкой
                            </div>
                            <div class="news-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                            </div>
                        </div>
                        <div class="news-img">
                            <img src="{{asset('/images/news5.png')}}" alt="">
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-text">
                            <div class="news-title">
                                Коробки испытательные с прозрачной крышкой
                            </div>
                            <div class="news-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                            </div>
                        </div>
                        <div class="news-img">
                            <img src="{{asset('/images/news5.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="page-navigation">
                    <div class="nav-text">
                        В начало
                    </div>
                    <div class="nav-arrow">
                        <svg width="124" height="24" viewBox="0 0 124 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M123.061 13.0607C123.646 12.4749 123.646 11.5251 123.061 10.9393L113.515 1.3934C112.929 0.807611 111.979 0.807611 111.393 1.3934C110.808 1.97919 110.808 2.92893 111.393 3.51472L119.879 12L111.393 20.4853C110.808 21.0711 110.808 22.0208 111.393 22.6066C111.979 23.1924 112.929 23.1924 113.515 22.6066L123.061 13.0607ZM120 13.5H122V10.5H120V13.5Z" fill="#2749A3"/>
                            <path d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.93934 10.9393ZM4 10.5H2V13.5H4V10.5Z" fill="#2749A3"/>
                        </svg>
                    </div>
                    <div class="nav-item selected">
                        1
                    </div>
                    <div class="nav-item">
                        2
                    </div>
                    <div class="nav-item">
                        3
                    </div>
                    <div class="nav-arrow">
                        <svg width="124" height="24" viewBox="0 0 124 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M123.061 13.0607C123.646 12.4749 123.646 11.5251 123.061 10.9393L113.515 1.3934C112.929 0.807611 111.979 0.807611 111.393 1.3934C110.808 1.97919 110.808 2.92893 111.393 3.51472L119.879 12L111.393 20.4853C110.808 21.0711 110.808 22.0208 111.393 22.6066C111.979 23.1924 112.929 23.1924 113.515 22.6066L123.061 13.0607ZM120 13.5H122V10.5H120V13.5Z" fill="#2749A3"/>
                            <path d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.93934 10.9393ZM4 10.5H2V13.5H4V10.5Z" fill="#2749A3"/>
                        </svg>
                    </div>
                    <div class="nav-text">
                        В конец
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
