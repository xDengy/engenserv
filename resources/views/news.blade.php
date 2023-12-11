@extends('layouts.main')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('/css/news.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
@endsection

@section('content')
    <section class="news">
        <div class="container">
            <div class="news-container">
                @include('includes.breadcrumbs', ['links' => [
                    [
                        'title' => 'Главная',
                        'link' => '/',
                    ],
                    [
                        'title' => 'Новости',
                    ],
                ]])
                <h1>
                    Новости
                </h1>
                <div class="news-items">
                    @foreach($news as $newItem)
                        <div class="news-item">
                            <div class="news-text">
                                <div class="news-title">
                                    {{$newItem->name}}
                                </div>
                                <div class="news-desc">
                                    @php
                                        echo htmlspecialchars_decode($newItem->text)
                                    @endphp
                                </div>
                            </div>
                            <div class="news-img">
                                <img src="{{$newItem->image}}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$news->links('includes.pagination')}}
            </div>
        </div>
    </section>
@endsection
