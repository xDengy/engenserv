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
                @include('includes.sections', ['folders' => $folders])
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
                        <h1 class="title">
                            Каталог
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
                                    <a href="{{$_SERVER['PATH_INFO']}}" class="select-value">
                                        дешевле
                                    </a>
                                    <a href="{{$_SERVER['PATH_INFO'] . '?sort=maxPrice'}}" class="select-value">
                                        дороже
                                    </a>
                                    <a href="{{$_SERVER['PATH_INFO'] . '?sort=new'}}" class="select-value">
                                        новинки
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-items">
                        @foreach($elements as $element)
                            <a href="{{route('catalogDetail', $element->code)}}" class="catalog-item">
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
