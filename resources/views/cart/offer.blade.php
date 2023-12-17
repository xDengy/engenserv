@extends('layouts.main')

@section('seo')
    <title>{{$page->title}}</title>
    <meta name="description" content="{{$page->desc}}">
    <meta name="keywords" content="{{$page->keywords}}">
    <link rel="stylesheet" href="{{ asset('/css/offer.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
@endsection

@section('scripts')
    <script src="{{ asset('js/offer.js') }}"></script>
@endsection

@section('content')
    <section class="offer-page">
        <div class="container">
            @include('includes.breadcrumbs', ['links' => $breadcrumbs])
            <div class="offer-container">
                <div class="offer-form">
                    <div class="form-title">
                        Оставьте свои данные
                        <br>
                        для выставления счёта
                    </div>
                    <form action="" method="post">
                        <input id="name" name="name" class="form-input" type="text" placeholder="Ваше имя" required>
                        <input id="email" name="email" class="form-input" type="email" placeholder="Электронная почта" required>
                        <textarea name="comment" id="comment" class="form-textarea" required>Комментарий к заказу...</textarea>
                        <input class="form-btn btn btn--blue" type="submit" value="Отправить заявку">
                        <div class="personal-wrapper">
                            <input class="personal-input" id="personal" name="personal" type="checkbox" required>
                            <label for="personal">
                            <span class="personal-text">
                                согласие на обработку моих
                                <br>
                                <a href="/personal/">персональных данных</a>
                            </span>
                            </label>
                        </div>
                    </form>
                </div>
                <div class="offer-cart">
                    <h1>
                        Заказ #32486
                    </h1>
                    <div class="cart-items">
                        <div class="cart-item">
                            <div class="cart-img">
                                <img src="{{asset('/images/catalog1.png')}}" alt="">
                            </div>
                            <div class="item-info">
                                <div class="cart-title">
                                    МКЮР-301591.000
                                </div>
                                <div class="price-counter">
                                    <div class="cart-counter">
                                        1 шт
                                    </div>
                                    <div class="vert-break"></div>
                                    <div class="cart-price">
                                        180  ₽
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="cart-img">
                                <img src="{{asset('/images/catalog1.png')}}" alt="">
                            </div>
                            <div class="item-info">
                                <div class="cart-title">
                                    МКЮР-301591.000
                                </div>
                                <div class="price-counter">
                                    <div class="cart-counter">
                                        1 шт
                                    </div>
                                    <div class="vert-break"></div>
                                    <div class="cart-price">
                                        180  ₽
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="cart-img">
                                <img src="{{asset('/images/catalog1.png')}}" alt="">
                            </div>
                            <div class="item-info">
                                <div class="cart-title">
                                    МКЮР-301591.000
                                </div>
                                <div class="price-counter">
                                    <div class="cart-counter">
                                        1 шт
                                    </div>
                                    <div class="vert-break"></div>
                                    <div class="cart-price">
                                        180  ₽
                                    </div>
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
                </div>
            </div>
        </div>
    </section>
@endsection
