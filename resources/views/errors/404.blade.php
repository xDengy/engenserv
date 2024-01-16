@extends('layouts.main')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('/css/error.css') }}" media="screen">
@endsection

@section('content')
    <section class="error">
        <div class="container">
            <div class="error-page-wrapper">
                <div class="error-img">
                    <img src="{{asset('/images/404.png')}}" alt="">
                </div>
                <h1>
                    Страница не найдена
                </h1>
                <div class="error-desc">
                    Неправильно набран адрес или такой страницы не существует
                </div>
                <div class="error-btns">
                    <div class="error-btn-back btn btn--bordered" data-btn="back">
                        Вернуться назад
                    </div>
                    <a href="/" class="error-btn-main btn btn--bordered btn--blue">
                        На главную
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
