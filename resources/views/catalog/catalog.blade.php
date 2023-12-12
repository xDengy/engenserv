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
                    @foreach($folders as $folder)
                    <div class="section-item">
                        <div class="section-info">
                            <a href="{{route('catalogDetail', $folder->id)}}" class="section-title">
                                {{$folder->name}}
                            </a>
                            @if($folder->children)
                                <div class="section-arrow">
                                    <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.9393 13.0607C11.5251 13.6464 12.4749 13.6464 13.0607 13.0607L22.6066 3.51472C23.1924 2.92893 23.1924 1.97919 22.6066 1.3934C22.0208 0.807611 21.0711 0.807611 20.4853 1.3934L12 9.87868L3.51472 1.3934C2.92893 0.807611 1.97919 0.807611 1.3934 1.3934C0.807611 1.97919 0.807611 2.92893 1.3934 3.51472L10.9393 13.0607ZM10.5 10V12H13.5V10H10.5Z" fill="#FF5C00"/>
                                    </svg>
                                </div>
                            @endif
                        </div>
                        @if($folder->children)
                            <div class="section-wrapper">
                                @foreach($folder->children as $child)
                                    <a href="{{route('catalogDetail', $child->id)}}" class="subsection-item">
                                        {{$child->name}}
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    @endforeach
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
                        @foreach($elements as $element)
                            <a href="{{route('catalogDetail', $element->id)}}" class="catalog-item">
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
