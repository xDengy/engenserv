@extends('layouts.main')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('/css/partnership.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
@endsection

@section('scripts')
    <script src="{{ asset('js/partnership.js') }}"></script>
@endsection

@section('content')
    <section class="partnership">
        <div class="container">
            @include('includes.breadcrumbs', ['links' => [
                [
                    'title' => 'Главная',
                    'link' => '/',
                ],
                [
                    'title' => 'Наши партнёры',
                ],
            ]])
            <h1>
                Наши партнёры
            </h1>
            <div class="page-desc">
                <b>Группа компаний “Инженерсервис”</b> - это Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            </div>
            <div class="partners">
                <div class="partner">
                    <div class="partner-img">
                        <img src="{{asset('/images/empty.png')}}" alt="">
                    </div>
                    <div class="partner-text-wrap">
                        <div class="partner-title">
                            Lorem ipsum dolor
                        </div>
                        <div class="partner-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        </div>
                    </div>
                </div>
                <div class="partner">
                    <div class="partner-img">
                        <img src="{{asset('/images/empty.png')}}" alt="">
                    </div>
                    <div class="partner-text-wrap">
                        <div class="partner-title">
                            Lorem ipsum dolor
                        </div>
                        <div class="partner-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        </div>
                    </div>
                </div>
                <div class="partner">
                    <div class="partner-img">
                        <img src="{{asset('/images/empty.png')}}" alt="">
                    </div>
                    <div class="partner-text-wrap">
                        <div class="partner-title">
                            Lorem ipsum dolor
                        </div>
                        <div class="partner-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        </div>
                    </div>
                </div>
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
                    <img src="{{asset('/images/empty.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
