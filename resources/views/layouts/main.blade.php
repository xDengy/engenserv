<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('fonts/fonts.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/headerAndFooterMain.css') }}" media="screen">
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
                    </div>
                </a>
                <div class="info">
                    <div class="info-wrapper">
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
                        <div class="cart">
                            <a href="">
                                <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.2969 26.3148C14.2969 26.8459 14.1387 27.365 13.8424 27.8066C13.546 28.2482 13.1248 28.5924 12.632 28.7956C12.1392 28.9988 11.597 29.052 11.0738 28.9484C10.5507 28.8448 10.0702 28.5891 9.69301 28.2135C9.31584 27.838 9.05899 27.3595 8.95493 26.8387C8.85087 26.3178 8.90428 25.7779 9.1084 25.2872C9.31252 24.7966 9.65818 24.3772 10.1017 24.0822C10.5452 23.7871 11.0666 23.6296 11.6 23.6296C12.3152 23.6296 13.0012 23.9125 13.507 24.4161C14.0127 24.9197 14.2969 25.6027 14.2969 26.3148ZM25.6237 23.6296C25.0903 23.6296 24.5689 23.7871 24.1254 24.0822C23.6819 24.3772 23.3362 24.7966 23.1321 25.2872C22.928 25.7779 22.8746 26.3178 22.9787 26.8387C23.0827 27.3595 23.3396 27.838 23.7167 28.2135C24.0939 28.5891 24.5744 28.8448 25.0976 28.9484C25.6207 29.052 26.163 28.9988 26.6558 28.7956C27.1485 28.5924 27.5697 28.2482 27.8661 27.8066C28.1624 27.365 28.3206 26.8459 28.3206 26.3148C28.3206 25.6027 28.0364 24.9197 27.5307 24.4161C27.0249 23.9125 26.339 23.6296 25.6237 23.6296ZM32.5641 7.45542L28.8842 19.3642C28.6493 20.1344 28.1712 20.8085 27.5209 21.2867C26.8706 21.7649 26.0828 22.0215 25.2745 22.0185H11.9951C11.1751 22.0159 10.3781 21.7487 9.7234 21.2571C9.06873 20.7655 8.59168 20.076 8.36374 19.2917L3.75344 3.22222H2.43062C2.00147 3.22222 1.58989 3.05248 1.28644 2.75034C0.98298 2.4482 0.8125 2.0384 0.8125 1.61111C0.8125 1.18382 0.98298 0.774025 1.28644 0.471884C1.58989 0.169742 2.00147 0 2.43062 0H4.15932C4.745 0.00180154 5.31431 0.192638 5.78183 0.543881C6.24936 0.895125 6.5899 1.38784 6.75236 1.9481L7.73537 5.37037H31.0175C31.2707 5.37035 31.5204 5.42951 31.7465 5.54309C31.9726 5.65667 32.1687 5.8215 32.3192 6.02432C32.4696 6.22714 32.5702 6.46229 32.6127 6.71085C32.6553 6.9594 32.6386 7.21443 32.5641 7.45542ZM28.8262 8.59259H8.65905L11.4759 18.4069C11.5082 18.5192 11.5763 18.618 11.67 18.6882C11.7637 18.7585 11.8778 18.7964 11.9951 18.7963H25.2745C25.3899 18.7965 25.5024 18.7599 25.5953 18.6917C25.6883 18.6236 25.7569 18.5275 25.7909 18.4177L28.8262 8.59259Z" fill="black"/>
                                </svg>
                                <div class="counter">1</div>
                            </a>
                        </div>
                    </div>
                    <div class="search">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M10.8409 11.8122L7.02273 7.98862C6.68182 8.26173 6.28977 8.47795 5.84659 8.63727C5.40341 8.79659 4.93182 8.87624 4.43182 8.87624C3.19318 8.87624 2.145 8.44654 1.28727 7.58714C0.429545 6.72774 0.000454545 5.67807 0 4.43812C0 3.19772 0.429091 2.14805 1.28727 1.2891C2.14545 0.430156 3.19364 0.000455192 4.43182 0C5.67045 0 6.71864 0.429701 7.57636 1.2891C8.43409 2.14851 8.86318 3.19818 8.86364 4.43812C8.86364 4.93883 8.78409 5.41109 8.625 5.85491C8.46591 6.29872 8.25 6.69132 7.97727 7.03272L11.8125 10.8734C11.9375 10.9986 12 11.1522 12 11.3343C12 11.5164 11.9318 11.6757 11.7955 11.8122C11.6705 11.9374 11.5114 12 11.3182 12C11.125 12 10.9659 11.9374 10.8409 11.8122ZM4.43182 7.51067C5.28409 7.51067 6.00864 7.21183 6.60545 6.61417C7.20227 6.0165 7.50045 5.29115 7.5 4.43812C7.5 3.58464 7.20159 2.85906 6.60477 2.26139C6.00795 1.66373 5.28364 1.36512 4.43182 1.36558C3.57955 1.36558 2.855 1.66441 2.25818 2.26208C1.66136 2.85974 1.36318 3.58509 1.36364 4.43812C1.36364 5.29161 1.66205 6.01718 2.25886 6.61485C2.85568 7.21252 3.58 7.51112 4.43182 7.51067Z" fill="black"/>
                        </svg>
                        <input placeholder="Поиск по каталогу..." name="search">
                    </div>
                </div>
            </div>
            @if(!empty($menu))
                <nav class="menu">
                    <div class="container">
                        <div class="menu-wrapper">
                            @foreach($menu as $link)
                                <a href="{{$link->link}}">{{$link->name}}</a>
                            @endforeach
                        </div>
                    </div>
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
