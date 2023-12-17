@extends('layouts.main')

@section('seo')
    <title>{{$page->title}}</title>
    <meta name="description" content="{{$page->desc}}">
    <meta name="keywords" content="{{$page->keywords}}">
    <link rel="stylesheet" href="{{ asset('/css/partnership.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}" media="screen">
@endsection

@section('scripts')
    <script src="{{ asset('js/partnership.js') }}"></script>
@endsection

@section('content')
    <section class="partnership">
        <div class="container">
            @include('includes.breadcrumbs', ['links' => $breadcrumbs])
            <h1>
                {{$page->h1}}
            </h1>
            <div class="page-desc">
                @php
                    echo htmlspecialchars_decode($page->page_desc1)
                @endphp
            </div>
            <div class="partners">
                @foreach($partners as $partner)
                    <div class="partner">
                        <div class="partner-img">
                            <img src="{{$partner->image}}" alt="">
                        </div>
                        <div class="partner-text-wrap">
                            <div class="partner-title">
                                {{$partner->name}}
                            </div>
                            <div class="partner-desc">
                                @php
                                    echo htmlspecialchars_decode($partner->text)
                                @endphp
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="form">
                <div class="form-wrapper">
                    <div class="form-title">
                        Хотите сотрудничать с нами?
                        <br>
                        Заполните заявку:
                    </div>
                    <form action="" method="post">
                        <input id="name" name="name" class="form-input" type="text" placeholder="Ваше имя" required>
                        <input id="email" name="email" class="form-input" type="email" placeholder="Электронная почта" required>
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
                <div class="form-img">
                    <img src="{{$page->photos1->first()->url}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
