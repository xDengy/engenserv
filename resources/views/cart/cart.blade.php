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
                <div class="cart-items">
                    @foreach($cart['items'] as $item)
                        <div class="cart-item">
                            <a href="{{$item->attributes->url}}" class="item-info">
                                <div class="cart-img">
                                    <img src="{{$item->attributes->img}}" alt="">
                                </div>
                                <div class="cart-title">
                                    {{$item->name}}
                                </div>
                            </a>
                            <div class="item-info">
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
                                    {{$item->total}} ₽
                                </div>
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
                            {{$cart['totalPrice']}} ₽
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
                <a href="{{route('offer')}}" class="cart-btn btn btn--blue">
                    Оформить заказ
                </a>
            </div>
        </div>
    </section>
@endsection
