@extends('layouts.main')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('/css/catalog.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/catalogSection.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
@endsection

@section('scripts')
    <script src="{{ asset('js/catalog.js') }}"></script>
    <script src="{{ asset('js/catalogSection.js') }}"></script>
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
                                <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9393 13.0607C11.5251 13.6464 12.4749 13.6464 13.0607 13.0607L22.6066 3.51472C23.1924 2.92893 23.1924 1.97919 22.6066 1.3934C22.0208 0.807611 21.0711 0.807611 20.4853 1.3934L12 9.87868L3.51472 1.3934C2.92893 0.807611 1.97919 0.807611 1.3934 1.3934C0.807611 1.97919 0.807611 2.92893 1.3934 3.51472L10.9393 13.0607ZM10.5 10V12H13.5V10H10.5Z" fill="#FF5C00"/>
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
                                <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9393 13.0607C11.5251 13.6464 12.4749 13.6464 13.0607 13.0607L22.6066 3.51472C23.1924 2.92893 23.1924 1.97919 22.6066 1.3934C22.0208 0.807611 21.0711 0.807611 20.4853 1.3934L12 9.87868L3.51472 1.3934C2.92893 0.807611 1.97919 0.807611 1.3934 1.3934C0.807611 1.97919 0.807611 2.92893 1.3934 3.51472L10.9393 13.0607ZM10.5 10V12H13.5V10H10.5Z" fill="#FF5C00"/>
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
                        ],
                    ]])
                    <div class="title-sort">
                        <div class="title">
                            Каталог
                        </div>
                        <div class="sort">
                            <div class="sort-title">
                                Сортировать:
                            </div>
                            <div class="sort-block">
                                <div class="selected-value">
                                    дешевле
                                </div>
                                <div class="select-values">
                                    <div class="select-value">
                                        дешевле
                                    </div>
                                    <div class="select-value">
                                        дороже
                                    </div>
                                    <div class="select-value">
                                        новинки
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-items">
                        <a href="{{route('catalogDetail', 1)}}" class="catalog-item">
                            <div class="item-img">
                                <img src="{{asset('/images/catalog1.png')}}" alt="">
                            </div>
                            <div class="item-info">
                                <div class="item-title">
                                    Название_1
                                </div>
                                <div class="item-cart-info">
                                    <div class="item-price">
                                        250 ₽
                                    </div>
                                    <div class="item-add-to-cart">
                                        +
                                    </div>
                                </div>
                            </div>
                        </a>
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
            </div>
        </div>
    </section>
@endsection
