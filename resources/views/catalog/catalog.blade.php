@extends('layouts.main')

@section('seo')
    <title>{{$page->title}}</title>
    <meta name="description" content="{{$page->desc}}">
    <meta name="keywords" content="{{$page->keywords}}">
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
                                    <a href="{{$_SERVER['REDIRECT_URL']}}" class="select-value">
                                        дешевле
                                    </a>
                                    <a href="{{$_SERVER['REDIRECT_URL'] . '?sort=maxPrice'}}" class="select-value">
                                        дороже
                                    </a>
                                    <a href="{{$_SERVER['REDIRECT_URL'] . '?sort=new'}}" class="select-value">
                                        новинки
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-items">
                        @foreach($elements as $element)
                            <a href="{{route('catalogDetail', $element->url)}}" class="catalog-item">
                                <div class="item-img">
                                    <img src="{{$element->attachment->first()->url ?? asset('/images/empty.png')}}" alt="">
                                </div>
                                <div class="item-info">
                                    <div class="item-title">
                                        {{$element->name}}
                                    </div>
                                    <div class="item-cart-info">
                                        <div class="item-price">
                                            {{$element->price}} ₽
                                        </div>
                                        <div class="item-add-to-cart">
                                            +
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        {{$elements->links('includes.pagination')}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
