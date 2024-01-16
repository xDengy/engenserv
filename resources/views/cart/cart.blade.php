@extends('layouts.main')

@section('seo')
    <title>{{$page->title}}</title>
    <meta name="description" content="{{$page->desc}}">
    <meta name="keywords" content="{{$page->keywords}}">
    <link rel="stylesheet" href="{{ asset('/css/cart.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
@endsection

@section('scripts')
    <script src="{{ asset('js/cart.js') }}"></script>
@endsection

@section('content')
    <section class="cart-page">
        <div class="container">
            @include('includes.breadcrumbs', ['links' => $breadcrumbs])
            <div class="cart-container">
                <h1>
                    {{$page->h1}}
                </h1>
                @if (!empty($cart['items']->toArray()))
                    <div class="cart-items">
                        @foreach($cart['items'] as $item)
                            <div class="cart-item">
                                <a href="/catalog/{{$item->attributes->url}}" class="item-info">
                                    <div class="cart-img">
                                        <img src="{{$item->attributes->img}}" alt="">
                                    </div>
                                    <div class="cart-title">
                                        {{$item->name}}
                                    </div>
                                </a>
                                <div class="item-info item-info--other">
                                    <div class="cart-counter" data-id="{{$item->id}}" data-url="{{route('cart.update')}}">
                                        <div class="counter-minus">
                                            -
                                        </div>
                                        <div class="counter-value">
                                            {{$item->quantity}}
                                        </div>
                                        <div class="counter-plus">
                                            +
                                        </div>
                                    </div>
                                    <div class="cart-price">
                                        {{number_format($item->total, 0, '', ' ')}} ₽
                                    </div>
                                </div>
                                <div class="cart-delete" data-id="{{$item->id}}" data-url="{{route('cart.remove')}}">
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12L12 1M1 1L12 12" stroke="black" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="cart-info">
                        <div class="price-info">
                            <div class="info-name">
                                Итого
                            </div>
                            <div class="info-value">
                                {{number_format($cart['totalPrice'], 0, '', ' ')}} ₽
                            </div>
                        </div>
                        <div class="count-info">
                            <div class="info-name">
                                Общее количество
                            </div>
                            <div class="info-value">
                                {{$cart['quantity']}}
                            </div>
                        </div>
                    </div>
                    <a href="{{route('order')}}" class="cart-btn btn btn--blue">
                        Оформить заказ
                    </a>
                @else
                    <div class="cart-desc">
                        Вы пока не добавили товары в корзину
                    </div>
                    <div class="cart-btns">
                        <div class="cart-btn-back btn btn--bordered" data-btn="back">
                            Вернуться назад
                        </div>
                        <a href="{{route('catalog')}}" class="cart-btn-main btn btn--bordered btn--blue">
                            В каталог
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
