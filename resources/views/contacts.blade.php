@extends('layouts.main')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('/css/contacts.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
    <script src="https://api-maps.yandex.ru/v3/?apikey=e3f3c25e-14cc-4459-8370-771db2cb03eb&lang=ru_RU"></script>
@endsection

@section('content')
    <section class="contacts">
        <div class="container">
            @include('includes.breadcrumbs', ['links' => [
                [
                    'title' => 'Главная',
                    'link' => '/',
                ],
                [
                    'title' => 'Контакты',
                ],
            ]])
            <h1>
                Контакты
            </h1>
            <div class="contacts-info">
                <div class="contacts-item">
                    <div class="info-name">
                        Адрес:
                    </div>
                    <div class="info-value">
                        {{$contact->address}}
                    </div>
                </div>
                <div class="contacts-item">
                    <div class="info-name">
                        Эл.почта:
                    </div>
                    <div class="info-value">
                        {{$contact->mail}}
                    </div>
                </div>
                <div class="contacts-item">
                    <div class="info-name">
                        Мобильный телефон:
                    </div>
                    <div class="info-value">
                        {{$contact->phone}}
                    </div>
                </div>
                <div class="contacts-item">
                    <div class="info-name">
                        График работы:
                    </div>
                    <div class="info-value">
                        {{$contact->work_hours}}
                    </div>
                </div>
                <div class="contacts-item">
                    <div class="info-name">
                        График отгрузки:
                    </div>
                    <div class="info-value">
                        {{$contact->shipping_hours}}
                    </div>
                </div>
            </div>
            <div class="contacts-map" id="map">

            </div>
            <script>
                initMap();
                async function initMap() {
                    // Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
                    await ymaps3.ready;

                    const {YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer, YMapMarker} = ymaps3;
                    const {YMapDefaultMarker} = await ymaps3.import('@yandex/ymaps3-markers@0.0.1');

                    // Иницилиазируем карту

                    const map = new YMap(
                        // Передаём ссылку на HTMLElement контейнера
                        document.getElementById('map'),

                        // Передаём параметры инициализации карты
                        {
                            location: {
                                // Координаты центра карты
                                center: [{{$contact->map_x}}, {{$contact->map_y}}],

                                // Уровень масштабирования
                                zoom: 10
                            }
                        }
                    );

                    // Добавляем слой для отображения схематической карты
                    map.addChild(new YMapDefaultSchemeLayer());
                    map.addChild(new YMapDefaultFeaturesLayer());
                    const content = document.createElement('div');
                    content.classList.add('test');
                    map.addChild(new YMapMarker({
                        coordinates: [{{$contact->map_x}}, {{$contact->map_y}}],
                        draggable: false
                    }, content));
                }
            </script>
        </div>
    </section>
@endsection
