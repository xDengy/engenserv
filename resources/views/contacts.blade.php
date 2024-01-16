@extends('layouts.main')

@section('seo')
    <title>{{$page->title}}</title>
    <meta name="description" content="{{$page->desc}}">
    <meta name="keywords" content="{{$page->keywords}}">
    <link rel="stylesheet" href="{{ asset('/css/contacts.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/breadcrumbs.css') }}" media="screen">
    <script src="https://api-maps.yandex.ru/v3/?apikey=5ef633e1-f97f-4f5f-a13e-533e152665d3&lang=ru_RU"></script>
@endsection

@section('scripts')
    <script src="{{ asset('/js/contacts.js') }}"></script>
@endsection

@section('content')
    <section class="contacts">
        <div class="container">
            @include('includes.breadcrumbs', ['links' => $breadcrumbs])
            <h1>
                {{$page->h1}}
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
                        Телефон:
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
                initMap({{$contact->map_x}}, {{$contact->map_y}});

                async function initMap(x, y) {
                    // Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
                    await ymaps3.ready;

                    const {YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer, YMapMarker, YMapControls} = ymaps3;
                    const {YMapZoomControl} = await ymaps3.import('@yandex/ymaps3-controls@0.0.1');
                    // Иницилиазируем карту

                    const map = new YMap(
                        // Передаём ссылку на HTMLElement контейнера
                        document.getElementById('map'),

                        // Передаём параметры инициализации карты
                        {
                            location: {
                                // Координаты центра карты
                                center: [x, y],

                                // Уровень масштабирования
                                zoom: 10
                            }
                        }
                    );

                    // Добавляем слой для отображения схематической карты
                    map.addChild(new YMapDefaultSchemeLayer());
                    map.addChild(new YMapDefaultFeaturesLayer());
                    map.addChild(new YMapControls({position: 'top right', orientation: 'vertical'}).addChild(new YMapZoomControl({})));
                    const content = document.createElement('div');
                    content.classList.add('contacts-map-icon');
                    map.addChild(new YMapMarker({
                        coordinates: [x, y],
                        draggable: false
                    }, content));
                }
            </script>
        </div>
    </section>
@endsection
