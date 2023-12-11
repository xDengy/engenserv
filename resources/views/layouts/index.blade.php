<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('fonts/fonts.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/headerAndFooter.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" media="screen">
        @yield('seo')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="container logo-container">
                <a href="/" class="logo">
                    <div class="logo-img">
                        <img src="{{$settings->logo}}" alt="logo">
                    </div>
                    <div class="logo-text">
                        @php
                            echo htmlspecialchars_decode($settings->logotext);
                        @endphp
                        <div class="logo-text-main">
                            Инженерсервис
                        </div>
                        <div class="logo-text-sub">
                            Группа компаний производителей
                        </div>
                    </div>
                </a>
                <div class="info">
                    <div class="link">
                        <a href="tel:{{$settings->phone}}">
                            {{$settings->phone}}
                        </a>
                    </div>
                    <div class="search">
                        <a href="">
                            <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.6215 26.5775L16.0781 17.9744C15.3153 18.5889 14.4381 19.0754 13.4464 19.4339C12.4548 19.7923 11.3995 19.9715 10.2808 19.9715C7.50922 19.9715 5.16384 19.0047 3.24462 17.0711C1.3254 15.1374 0.365275 12.7756 0.364258 9.98577C0.364258 7.19488 1.32438 4.83312 3.24462 2.90048C5.16486 0.967852 7.51024 0.00102418 10.2808 0C13.0523 0 15.3977 0.966828 17.3169 2.90048C19.2361 4.83414 20.1962 7.1959 20.1973 9.98577C20.1973 11.1124 20.0193 12.175 19.6633 13.1735C19.3073 14.1721 18.8242 15.0555 18.214 15.8236L26.7955 24.4651C27.0752 24.7468 27.2151 25.0925 27.2151 25.5021C27.2151 25.9118 27.0625 26.2703 26.7574 26.5775C26.4777 26.8592 26.1217 27 25.6895 27C25.2572 27 24.9012 26.8592 24.6215 26.5775ZM10.2808 16.899C12.1878 16.899 13.809 16.2266 15.1444 14.8819C16.4798 13.5371 17.147 11.9051 17.146 9.98577C17.146 8.06543 16.4783 6.43289 15.1429 5.08814C13.8075 3.74338 12.1868 3.07152 10.2808 3.07255C8.37374 3.07255 6.75252 3.74492 5.4171 5.08967C4.08167 6.43442 3.41447 8.06646 3.41549 9.98577C3.41549 11.9061 4.0832 13.5387 5.41862 14.8834C6.75404 16.2282 8.37475 16.9 10.2808 16.899Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                    <div class="cart">
                        <a href="">
                            <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.2969 26.3148C14.2969 26.8459 14.1387 27.365 13.8424 27.8066C13.546 28.2482 13.1248 28.5924 12.632 28.7956C12.1392 28.9988 11.597 29.052 11.0738 28.9484C10.5507 28.8448 10.0702 28.5891 9.69301 28.2135C9.31584 27.838 9.05899 27.3595 8.95493 26.8387C8.85087 26.3178 8.90428 25.7779 9.1084 25.2872C9.31252 24.7966 9.65818 24.3772 10.1017 24.0822C10.5452 23.7871 11.0666 23.6296 11.6 23.6296C12.3152 23.6296 13.0012 23.9125 13.507 24.4161C14.0127 24.9197 14.2969 25.6027 14.2969 26.3148ZM25.6237 23.6296C25.0903 23.6296 24.5689 23.7871 24.1254 24.0822C23.6819 24.3772 23.3362 24.7966 23.1321 25.2872C22.928 25.7779 22.8746 26.3178 22.9787 26.8387C23.0827 27.3595 23.3396 27.838 23.7167 28.2135C24.0939 28.5891 24.5744 28.8448 25.0976 28.9484C25.6207 29.052 26.163 28.9988 26.6558 28.7956C27.1485 28.5924 27.5697 28.2482 27.8661 27.8066C28.1624 27.365 28.3206 26.8459 28.3206 26.3148C28.3206 25.6027 28.0364 24.9197 27.5307 24.4161C27.0249 23.9125 26.339 23.6296 25.6237 23.6296ZM32.5641 7.45542L28.8842 19.3642C28.6493 20.1344 28.1712 20.8085 27.5209 21.2867C26.8706 21.7649 26.0828 22.0215 25.2745 22.0185H11.9951C11.1751 22.0159 10.3781 21.7487 9.7234 21.2571C9.06873 20.7655 8.59168 20.076 8.36374 19.2917L3.75344 3.22222H2.43062C2.00147 3.22222 1.58989 3.05248 1.28644 2.75034C0.98298 2.4482 0.8125 2.0384 0.8125 1.61111C0.8125 1.18382 0.98298 0.774025 1.28644 0.471884C1.58989 0.169742 2.00147 0 2.43062 0H4.15932C4.745 0.00180154 5.31431 0.192638 5.78183 0.543881C6.24936 0.895125 6.5899 1.38784 6.75236 1.9481L7.73537 5.37037H31.0175C31.2707 5.37035 31.5204 5.42951 31.7465 5.54309C31.9726 5.65667 32.1687 5.8215 32.3192 6.02432C32.4696 6.22714 32.5702 6.46229 32.6127 6.71085C32.6553 6.9594 32.6386 7.21443 32.5641 7.45542ZM28.8262 8.59259H8.65905L11.4759 18.4069C11.5082 18.5192 11.5763 18.618 11.67 18.6882C11.7637 18.7585 11.8778 18.7964 11.9951 18.7963H25.2745C25.3899 18.7965 25.5024 18.7599 25.5953 18.6917C25.6883 18.6236 25.7569 18.5275 25.7909 18.4177L28.8262 8.59259Z" fill="white"/>
                            </svg>
                            <div class="counter">1</div>
                        </a>
                    </div>
                </div>
            </div>
            @if(!empty($menu))
                <nav class="container menu">
                    @foreach($menu as $link)
                    <a href="{{$link->link}}">{{$link->name}}</a>
                    @endforeach
                </nav>
            @endif
        </header>
        @yield('content')
        <footer>
            <div class="container">
                <div class="logo-container">
                    <a href="/" class="logo">
                        <div class="logo-img">
                            <img src="{{$settings->logo}}" alt="logo">
                        </div>
                        <div class="logo-text">
                            @php
                                echo htmlspecialchars_decode($settings->logotext);
                            @endphp
                            <div class="logo-text-main">
                                Инженерсервис
                            </div>
                            <div class="logo-text-sub">
                                Группа компаний производителей
                            </div>
                        </div>
                    </a>
                    <div class="info">
                        <div class="link">
                            <a href="tel:{{$settings->phone}}">
                                {{$settings->phone}}
                            </a>
                        </div>
                        <div class="link">
                            <a href="mailto:{{$settings->email}}">
                                {{$settings->email}}
                            </a>
                        </div>
                    </div>
                </div>
                @if(!empty($menu))
                    <nav class="menu">
                        @foreach($menu as $link)
                            <a href="{{$link->link}}">{{$link->name}}</a>
                        @endforeach
                    </nav>
                @endif
                <div class="copyright-text">
                    2014 © ООО "Инженерсервис".
                    <br>
                    {{$settings->copyright}}
                </div>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
