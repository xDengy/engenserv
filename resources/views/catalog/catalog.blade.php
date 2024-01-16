@extends('layouts.main')

@section('seo')
    <title>{{$page->title}}</title>
    <meta name="description" content="{{$page->desc}}">
    <meta name="keywords" content="{{$page->keywords}}">
    <link rel="stylesheet" href="{{ asset('/css/catalog.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/catalogSection.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/cartAddPopup.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
@endsection

@section('scripts')
    <script src="{{ asset('js/catalog.js') }}"></script>
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
                    <div class="title-sort">
                        <h1 class="title">
                            {{$page->h1}}
                        </h1>
                        <div class="sort">
                            <div class="sort-title">
                                Сортировать:
                            </div>
                            <div class="sort-block">
                                <div class="selected-value">
                                    дешевле
                                </div>
                                <div class="select-values">
                                    <a href="{{$request_uri}}" class="select-value">
                                        дешевле
                                    </a>
                                    <a href="{{$request_uri . '?sort=maxPrice'}}" class="select-value">
                                        дороже
                                    </a>
                                    <a href="{{$request_uri . '?sort=new'}}" class="select-value">
                                        новинки
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-items">
                        @foreach($elements as $element)
                            <div class="catalog-item">
                                <a href="{{route('catalogDetail', $element->url)}}" class="item-img">
                                    <img src="{{$element->attachment->first()->url ?? asset('/images/empty.png')}}" alt="">
                                </a>
                                <div class="item-info">
                                    <a href="{{route('catalogDetail', $element->url)}}" class="item-title">
                                        {{$element->name}}
                                    </a>
                                    <div class="item-cart-info">
                                        <div class="item-price">
                                            {{number_format($element->price, 0, '', ' ')}} ₽
                                        </div>
                                        <div class="item-add-to-cart detail-add-to-cart" data-id="{{$element->id}}" data-url="{{route('cart.update.product')}}">
                                            +
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{$elements->links('includes.pagination')}}
                    @include('includes.cartAddPopup')
                </div>
            </div>
        </div>
    </section>
@endsection
