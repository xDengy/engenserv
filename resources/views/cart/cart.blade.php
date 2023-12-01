@extends('layouts.main')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('/css/cart.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
@endsection

@section('scripts')
    <script src="{{ asset('js/cart.js') }}"></script>
@endsection

@section('content')
    <section class="cart-page">
        <div class="container">
            @include('includes.breadcrumbs', ['links' => [
                [
                    'title' => 'Главная',
                    'link' => '/',
                ],
                [
                    'title' => 'Корзина',
                ],
            ]])
            <div class="cart-container">
                <h1>
                    Корзина
                </h1>
                <div class="cart-items">
                    <div class="cart-item">
                        <div class="item-info">
                            <div class="cart-img">
                                <img src="{{asset('/images/catalog1.png')}}" alt="">
                            </div>
                            <div class="cart-title">
                                МКЮР-301591.000
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="cart-counter">
                                <div class="counter-minus">
                                    -
                                </div>
                                <div class="counter-value">
                                    1
                                </div>
                                <div class="counter-plus">
                                    +
                                </div>
                            </div>
                            <div class="cart-price">
                                180  ₽
                            </div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="item-info">
                            <div class="cart-img">
                                <img src="{{asset('/images/catalog1.png')}}" alt="">
                            </div>
                            <div class="cart-title">
                                МКЮР-301591.000
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="cart-counter">
                                <div class="counter-minus">
                                    -
                                </div>
                                <div class="counter-value">
                                    1
                                </div>
                                <div class="counter-plus">
                                    +
                                </div>
                            </div>
                            <div class="cart-price">
                                180  ₽
                            </div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="item-info">
                            <div class="cart-img">
                                <img src="{{asset('/images/catalog1.png')}}" alt="">
                            </div>
                            <div class="cart-title">
                                МКЮР-301591.000
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="cart-counter">
                                <div class="counter-minus">
                                    -
                                </div>
                                <div class="counter-value">
                                    1
                                </div>
                                <div class="counter-plus">
                                    +
                                </div>
                            </div>
                            <div class="cart-price">
                                180  ₽
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-info">
                    <div class="price-info">
                        <div class="info-name">
                            Итого
                        </div>
                        <div class="info-value">
                            540 ₽
                        </div>
                    </div>
                    <div class="count-info">
                        <div class="info-name">
                            Общее количество
                        </div>
                        <div class="info-value">
                            4
                        </div>
                    </div>
                </div>
                <a class="cart-btn btn btn--blue">
                    Оформить заказ
                </a>
            </div>
        </div>
    </section>
@endsection
