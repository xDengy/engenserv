@extends('layouts.main')

@section('seo')
    <title>{{$page->title}}</title>
    <meta name="description" content="{{$page->desc}}">
    <meta name="keywords" content="{{$page->keywords}}">
    <link rel="stylesheet" href="{{ asset('/css/catalogDetail.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/catalogSection.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/cartAddPopup.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
@endsection

@section('scripts')
    <script src="{{ asset('/js/catalogDetail.js') }}"></script>
    <script src="{{ asset('js/catalogSection.js') }}"></script>
    <script src="{{ asset('js/cartAddPopup.js') }}"></script>
@endsection

@section('content')
    <section class="catalog">
        <div class="container">
            <div class="catalog-container">
                @include('includes.sections', ['folders' => $folders])
                <div class="catalog-block">
                    @include('includes.breadcrumbs', ['links' => $breadcrumbs])
                    <div class="catalog-detail">
                        <div class="catalog-info-wrapper">
                            <div class="img-wrapper">
                                <div class="swiper max-swiper">
                                    <div class="swiper-wrapper">
                                        @foreach($element->attachment->all() as $attachment)
                                            <div class="swiper-slide">
                                                <img src="{{$attachment->url}}" alt=""/>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="swiper min-swiper hd-mob">
                                    <div class="swiper-wrapper">
                                        @foreach($element->attachment->all() as $attachment)
                                            <div class="swiper-slide">
                                                <img src="{{$attachment->url}}" alt=""/>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="detail-info">
                                <div class="title-wrapper">
                                    <h1 class="detail-title">
                                        {{$page->h1}}
                                    </h1>
                                    @if ($element->new)
                                        <div class="detail-tag btn btn--orange">
                                            Новинка
                                        </div>
                                    @endif
                                </div>
                                <div class="detail-price">
                                    {{number_format($element->price, 0, '', ' ')}} ₽
                                </div>
                                <div class="detail-desc">
                                    @php
                                        echo htmlspecialchars_decode($element->text)
                                    @endphp
                                </div>
                                <div class="detail-add-to-cart btn btn--blue" data-id="{{$element->id}}" data-url="{{route('cart.update.product')}}">
                                    Добавить в корзину
                                </div>
                            </div>
                        </div>
                        <div class="other-items">
                            @if($element->chars)
                                <div class="other-item">
                                    <div class="other-title">
                                        Технические характеристики
                                    </div>
                                    <div class="other-desc">
                                        <div class="other-desc-wrapper">
                                            @php
                                                echo htmlspecialchars_decode($element->chars)
                                            @endphp
                                            <div class="other-show-text">
                                                Свернуть
                                            </div>
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
                            @endif
                            @if($element->scheme)
                                <div class="other-item">
                                    <div class="other-title">
                                        Принципиальная схема
                                    </div>
                                    <div class="other-desc">
                                        <div class="other-desc-wrapper">
                                            @php
                                                echo htmlspecialchars_decode($element->scheme)
                                            @endphp
                                            <div class="other-show-text">
                                                Свернуть
                                            </div>
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
                            @endif
                        </div>
                    </div>
                    @include('includes.cartAddPopup')
                </div>
            </div>
        </div>
    </section>
@endsection
