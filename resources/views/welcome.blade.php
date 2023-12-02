@extends('layouts.index')

@section('seo')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}" media="screen">
@endsection

@section('scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection

@section('content')
    <section class="banner">
        <img class="banner-img" src="{{asset('/images/banner.png')}}" alt="">
        <div class="banner-shadow"></div>
        <div class="container">
            <div class="banner-block">
                <div class="banner-block-text">
                    Ваш надёжный партнёр <br> <b>с 1995 года</b>
                </div>
                <a href="" class="banner-block-btn btn btn--orange btn--round">
                    Перейти в каталог
                </a>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="advantage">
                            <div class="advantage-icon">
                                <svg width="68" height="60" viewBox="0 0 68 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_18_6)">
                                        <path d="M12.9141 25.5543H25.3941V29.7143H12.9141V25.5543ZM12.9141 17.2343H33.7141V21.3943H12.9141V17.2343ZM12.9141 8.91431H33.7141V13.0743H12.9141V8.91431Z" fill="#2749A2"/>
                                    </g>
                                    <g filter="url(#filter1_d_18_6)">
                                        <path d="M29.4694 46.9857H8.2449V4.27143H59.1837V25.6286H63.4286V4.27143C63.4286 3.13858 62.9813 2.05212 62.1853 1.25107C61.3892 0.450024 60.3095 0 59.1837 0H8.2449C7.11908 0 6.03937 0.450024 5.2433 1.25107C4.44723 2.05212 4 3.13858 4 4.27143V46.9857C4 48.1186 4.44723 49.205 5.2433 50.0061C6.03937 50.8071 7.11908 51.2571 8.2449 51.2571H29.4694V46.9857Z" fill="#2749A2"/>
                                    </g>
                                    <g filter="url(#filter2_d_18_6)">
                                        <path d="M46.5909 45.9888L41.1396 40.4683L38.1719 43.4736L46.5909 51.9995L63.429 34.9478L60.4613 31.9424L46.5909 45.9888Z" fill="#2749A2"/>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_18_6" x="8.91406" y="8.91431" width="28.7998" height="28.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="4"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_18_6"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_18_6" result="shape"/>
                                        </filter>
                                        <filter id="filter1_d_18_6" x="0" y="0" width="67.4287" height="59.2571" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="4"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_18_6"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_18_6" result="shape"/>
                                        </filter>
                                        <filter id="filter2_d_18_6" x="34.1719" y="31.9424" width="33.2568" height="28.0571" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="4"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_18_6"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_18_6" result="shape"/>
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                            <div class="advantage-text">
                                Контроль качества
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantage">
                            <div class="advantage-icon">
                                <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_18_12)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.7697 2.70222C25.9733 4.45156 22.2115 8.54222 20.7093 13.6782C18.0409 15.0471 16.4444 16.7822 16.4444 18.6667C16.4444 20.7964 18.4782 22.7324 21.7955 24.1653C21.6992 26.0905 21.9952 28.0151 22.6655 29.8223C23.3359 31.6296 24.3666 33.2817 25.695 34.6783C27.0235 36.0749 28.622 37.1869 30.3935 37.9468C32.165 38.7066 34.0724 39.0984 35.9999 39.0984C37.9275 39.0984 39.8349 38.7066 41.6064 37.9468C43.3778 37.1869 44.9763 36.0749 46.3048 34.6783C47.6333 33.2817 48.664 31.6296 49.3343 29.8223C50.0047 28.0151 50.3007 26.0905 50.2043 24.1653C53.5217 22.7324 55.5554 20.7964 55.5554 18.6667C55.5554 16.7804 53.959 15.0471 51.2888 13.6782C49.7866 8.54044 46.0266 4.45156 41.2301 2.70044C41.0391 1.92933 40.5953 1.24441 39.9695 0.754959C39.3438 0.265508 38.5721 -0.000278505 37.7777 2.18995e-07H34.2222C33.4275 -0.000180256 32.6557 0.265861 32.0299 0.75566C31.4041 1.24546 30.9604 1.93078 30.7697 2.70222ZM32.4444 10.6667C32.9159 10.6667 33.3681 10.4794 33.7015 10.146C34.0349 9.81257 34.2222 9.36038 34.2222 8.88889V3.55556H37.7777V8.88889C37.7777 9.36038 37.965 9.81257 38.2984 10.146C38.6318 10.4794 39.084 10.6667 39.5555 10.6667C40.027 10.6667 40.4792 10.4794 40.8125 10.146C41.1459 9.81257 41.3332 9.36038 41.3332 8.88889V6.61689C44.1546 8.05689 46.4319 10.6222 47.5999 13.8276C47.5948 13.8482 47.59 13.8689 47.5857 13.8898C47.4971 13.9595 47.4038 14.023 47.3066 14.08C46.7981 14.3822 45.959 14.7129 44.7963 15.0151C42.4977 15.6142 39.319 16 35.9999 16C32.6808 16 29.5022 15.6142 27.2035 15.0151C26.0408 14.7129 25.2017 14.3822 24.6933 14.08C24.596 14.023 24.5028 13.9595 24.4142 13.8898L24.4106 13.8738C24.4073 13.8583 24.4038 13.8429 24.4 13.8276C25.5679 10.6222 27.8453 8.05511 30.6666 6.61689V8.88889C30.6666 9.36038 30.8539 9.81257 31.1873 10.146C31.5207 10.4794 31.9729 10.6667 32.4444 10.6667ZM22.3893 16.8142L22.3306 16.8427C21.2515 17.3956 20.5991 17.9218 20.256 18.3147C20.1577 18.4196 20.075 18.5381 20.0106 18.6667C20.048 18.752 20.1564 18.9369 20.4533 19.2249C21.0097 19.7636 22.0017 20.4124 23.5182 21.0329C26.5333 22.2667 30.9457 23.1111 35.9999 23.1111C41.0541 23.1111 45.4666 22.2667 48.4799 21.0311C49.9981 20.4124 50.9901 19.7636 51.5466 19.2249C51.8434 18.9369 51.9519 18.752 51.9892 18.6667C51.9248 18.5381 51.8422 18.4196 51.7439 18.3147C51.4008 17.9218 50.7483 17.3956 49.6692 16.8427L49.6106 16.8142C49.4545 16.9285 49.2932 17.0353 49.127 17.1342C48.2079 17.6818 47.0026 18.1156 45.6906 18.4569C43.0417 19.1467 39.5555 19.5556 35.9999 19.5556C32.4444 19.5556 28.9582 19.1467 26.3093 18.4569C24.9973 18.1156 23.792 17.6818 22.8728 17.1324C22.7067 17.0335 22.5453 16.9267 22.3893 16.8124V16.8142ZM52.007 18.7164L51.9999 18.7022L52.0034 18.72L52.007 18.7164ZM52.007 18.6133C52.0052 18.6133 52.0034 18.6187 52.0017 18.6311C52.0031 18.6264 52.0043 18.6217 52.0052 18.6169V18.6116L52.007 18.6133ZM19.9964 18.624L19.9946 18.6133L19.9982 18.6311L19.9964 18.624ZM19.9964 18.7093V18.7004V18.7058L19.9946 18.7164L19.9964 18.7093ZM46.6559 25.376C43.591 26.1938 39.9288 26.6667 35.9999 26.6667C32.071 26.6667 28.4088 26.192 25.344 25.376C25.4667 28.1197 26.6431 30.7102 28.628 32.6083C30.6129 34.5064 33.2535 35.5658 35.9999 35.5658C38.7463 35.5658 41.3869 34.5064 43.3718 32.6083C45.3568 30.7102 46.5331 28.1197 46.6559 25.376ZM54.9954 36.6116C55.095 36.2982 55.1058 35.9634 55.0265 35.6443C54.9472 35.3252 54.7809 35.0343 54.5463 34.8041C54.3116 34.5738 54.0176 34.4131 53.6971 34.3399C53.3765 34.2667 53.042 34.2838 52.7306 34.3893C50.6698 35.09 48.8488 36.3582 47.4771 38.048C46.1053 39.7378 45.2385 41.7807 44.9764 43.9414C44.7143 46.1021 45.0676 48.2929 45.9956 50.2617C46.9236 52.2305 48.3887 53.8973 50.2221 55.0702V62.2222C50.2221 62.6937 50.4094 63.1459 50.7428 63.4793C51.0762 63.8127 51.5284 64 51.9999 64H60.8888C61.3603 64 61.8124 63.8127 62.1458 63.4793C62.4792 63.1459 62.6665 62.6937 62.6665 62.2222V55.072C64.501 53.8994 65.967 52.2324 66.8957 50.2632C67.8244 48.294 68.178 46.1025 67.9159 43.9411C67.6538 41.7797 66.7866 39.7362 65.4141 38.0461C64.0416 36.3559 62.2197 35.0877 60.1581 34.3876C59.8465 34.2818 59.5117 34.2646 59.1909 34.3379C58.8702 34.4112 58.576 34.572 58.3412 34.8026C58.1065 35.0331 57.9403 35.3243 57.8612 35.6437C57.7821 35.963 57.7932 36.2981 57.8932 36.6116C57.9086 36.6595 57.9217 36.7081 57.9323 36.7573L58.9225 41.3796C59.0008 41.7486 58.9956 42.1305 58.9074 42.4974C58.8192 42.8642 58.6502 43.2067 58.4127 43.4998C58.1752 43.793 57.8752 44.0294 57.5347 44.1918C57.1941 44.3542 56.8216 44.4384 56.4443 44.4384C56.067 44.4384 55.6945 44.3542 55.354 44.1918C55.0134 44.0294 54.7134 43.793 54.4759 43.4998C54.2384 43.2067 54.0694 42.8642 53.9812 42.4974C53.893 42.1305 53.8878 41.7486 53.9661 41.3796L54.9563 36.7573C54.9669 36.7081 54.98 36.6595 54.9954 36.6116ZM62.3981 40.6347L62.2203 39.7956C63.0846 40.6966 63.7261 41.7873 64.0933 42.9807C64.4605 44.174 64.5433 45.4367 64.3351 46.6677C64.1269 47.8988 63.6335 49.064 62.8943 50.0702C62.1551 51.0764 61.1906 51.8955 60.0781 52.4622C59.7755 52.6165 59.5235 52.8542 59.3518 53.1472C59.1801 53.4402 59.0959 53.7762 59.1092 54.1156L59.111 54.2222V60.4444H53.7777V54.208L53.7794 54.1156C53.7929 53.7764 53.709 53.4405 53.5376 53.1475C53.3662 52.8545 53.1145 52.6167 52.8123 52.4622C51.6998 51.8955 50.7353 51.0764 49.9961 50.0702C49.2569 49.064 48.7635 47.8988 48.5553 46.6677C48.3471 45.4367 48.4299 44.174 48.7971 42.9807C49.1644 41.7873 49.8058 40.6966 50.6701 39.7956L50.4906 40.6347C50.3004 41.5224 50.3111 42.4414 50.522 43.3245C50.7328 44.2075 51.1385 45.0323 51.7093 45.7383C52.2801 46.4443 53.0015 47.0137 53.8208 47.4049C54.6401 47.7961 55.5364 47.9991 56.4443 47.9991C57.3522 47.9991 58.2486 47.7961 59.0679 47.4049C59.8871 47.0137 60.6086 46.4443 61.1794 45.7383C61.7501 45.0323 62.1558 44.2075 62.3667 43.3245C62.5775 42.4414 62.5883 41.5224 62.3981 40.6347ZM25.9608 40.192L34.2222 46.6169V53.1502C34.5866 53.2427 35.1555 53.3333 35.9999 53.3333C36.8444 53.3333 37.4133 53.2444 37.7777 53.1502V46.2222L41.3332 43.5556V64H4V53.3333C4 46.8249 15.5911 42.1813 25.9608 40.192ZM19.0666 53.8098L30.6666 51.8773V60.4444H16.4444V46.5422C18.3916 45.7948 20.38 45.1597 22.4 44.64L19.0666 53.8098ZM7.55555 60.4444H12.8889V48.1404L12.7573 48.2098C10.8658 49.2124 9.48265 50.2347 8.61154 51.1964C7.75821 52.1422 7.55555 52.8409 7.55555 53.3333V60.4444ZM35.9999 56.8889C35.3279 56.8889 34.7377 56.8444 34.2222 56.7698V60.4444H37.7777V56.7698C37.2621 56.8444 36.6719 56.8889 35.9999 56.8889ZM30.5777 48.2862L26.1191 44.8196L24.4888 49.3013L30.5777 48.2862Z" fill="#2749A2"/>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_18_12" x="0" y="0" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="4"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_18_12"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_18_12" result="shape"/>
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                            <div class="advantage-text">
                                Собственное производство
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantage">
                            <div class="advantage-icon">
                                <svg width="77" height="69" viewBox="0 0 77 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_18_16)">
                                        <path d="M72.7766 29.4047L64.5015 9.99749C64.2892 9.49866 63.9357 9.07352 63.4851 8.77483C63.0344 8.47615 62.5064 8.31708 61.9666 8.31738H53.6916V2.77246C53.6916 2.03716 53.401 1.33197 52.8837 0.812035C52.3664 0.292098 51.6648 0 50.9332 0H6.79968V5.54492H48.1749V40.3559C46.918 41.0895 45.818 42.0659 44.9384 43.2289C44.0588 44.3918 43.4169 45.7183 43.0499 47.1318H25.7164C25.0451 44.5183 23.4484 42.2407 21.2258 40.7258C19.0032 39.2108 16.3072 38.5627 13.6431 38.9028C10.9791 39.2429 8.52989 40.5479 6.75465 42.5732C4.97941 44.5985 4 47.2051 4 49.9043C4 52.6035 4.97941 55.21 6.75465 57.2353C8.52989 59.2606 10.9791 60.5656 13.6431 60.9057C16.3072 61.2458 19.0032 60.5977 21.2258 59.0828C23.4484 57.5679 25.0451 55.2902 25.7164 52.6767H43.0499C43.6499 55.0562 45.0222 57.1666 46.9496 58.674C48.8769 60.1815 51.2494 61 53.6916 61C56.1338 61 58.5062 60.1815 60.4336 58.674C62.361 57.1666 63.7332 55.0562 64.3333 52.6767H70.2417C70.9732 52.6767 71.6748 52.3846 72.1921 51.8647C72.7094 51.3448 73 50.6396 73 49.9043V30.4971C73.0001 30.1215 72.9241 29.7498 72.7766 29.4047ZM15.0747 55.4492C13.9836 55.4492 12.917 55.124 12.0098 54.5147C11.1026 53.9054 10.3955 53.0394 9.97796 52.0262C9.56041 51.013 9.45116 49.8981 9.66402 48.8225C9.87689 47.7469 10.4023 46.7589 11.1738 45.9834C11.9453 45.2079 12.9283 44.6798 13.9985 44.4659C15.0686 44.2519 16.1778 44.3617 17.1859 44.7814C18.1939 45.2011 19.0555 45.9118 19.6617 46.8237C20.2679 47.7355 20.5914 48.8076 20.5914 49.9043C20.5899 51.3744 20.0083 52.7839 18.974 53.8235C17.9397 54.8631 16.5374 55.4477 15.0747 55.4492ZM53.6916 13.8623H60.1461L66.06 27.7246H53.6916V13.8623ZM53.6916 55.4492C52.6005 55.4492 51.5339 55.124 50.6267 54.5147C49.7194 53.9054 49.0124 53.0394 48.5948 52.0262C48.1773 51.013 48.068 49.8981 48.2809 48.8225C48.4937 47.7469 49.0192 46.7589 49.7907 45.9834C50.5622 45.2079 51.5452 44.6798 52.6153 44.4659C53.6854 44.2519 54.7947 44.3617 55.8027 44.7814C56.8108 45.2011 57.6723 45.9118 58.2785 46.8237C58.8847 47.7355 59.2083 48.8076 59.2083 49.9043C59.2068 51.3744 58.6251 52.7839 57.5909 53.8235C56.5566 54.8631 55.1542 55.4477 53.6916 55.4492ZM67.4833 47.1318H64.3333C63.7257 44.757 62.3512 42.652 60.4254 41.1468C58.4995 39.6416 56.1311 38.8213 53.6916 38.8144V33.2695H67.4833V47.1318Z" fill="#2749A2"/>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_18_16" x="0" y="0" width="77" height="69" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="4"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_18_16"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_18_16" result="shape"/>
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                            <div class="advantage-text">
                                Минимальные сроки отгрузки
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="news-wrapper">
                <div class="news-column">
                    <div class="news-item">
                        <img src="{{asset('/images/news1.png')}}" alt="">
                        <div class="news-block">
                            <div class="news-btn btn btn btn--orange btn--round">
                                Новости производства
                            </div>
                            <div class="news-name">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-column">
                    <div class="news-item">
                        <img src="{{asset('/images/news2.png')}}" alt="">
                        <div class="news-block">
                            <div class="news-btn btn btn btn--blue btn--round">
                                Новости производства
                            </div>
                            <div class="news-name">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </div>
                        </div>
                    </div>
                    <div class="news-item">
                        <img src="{{asset('/images/news3.png')}}" alt="">
                        <div class="news-block">
                            <div class="news-btn btn btn btn--orange btn--round">
                                Новости производства
                            </div>
                            <div class="news-name">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </div>
                        </div>
                    </div>
                    <div class="news-item">
                        <img src="{{asset('/images/news4.png')}}" alt="">
                        <div class="news-block">
                            <div class="news-btn btn btn btn--orange btn--round">
                                Новости производства
                            </div>
                            <div class="news-name">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="about-block">
                <div class="about-text">
                    <div class="about-title">
                        Title Name
                    </div>
                    <div class="about-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et <b>dolore magna aliqua</b>. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. <b>Excepteur sint occaecat</b> cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </div>
                    <div class="about-quality">
                        <div class="quality">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.6" d="M1.77273 7.42857C1.77273 4.30493 4.30493 1.77273 7.42857 1.77273H18.5714C21.6951 1.77273 24.2273 4.30493 24.2273 7.42857V18.5714C24.2273 21.6951 21.6951 24.2273 18.5714 24.2273H7.42857C4.30493 24.2273 1.77273 21.6951 1.77273 18.5714V7.42857Z" stroke="#FF5C00" stroke-width="3.54545"/>
                            </svg>
                            Качество
                        </div>
                        <div class="quality">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.6"
                                      d="M1.77273 7.42857C1.77273 4.30493 4.30493 1.77273 7.42857 1.77273H18.5714C21.6951 1.77273 24.2273 4.30493 24.2273 7.42857V18.5714C24.2273 21.6951 21.6951 24.2273 18.5714 24.2273H7.42857C4.30493 24.2273 1.77273 21.6951 1.77273 18.5714V7.42857Z"
                                      stroke="#2749A3" stroke-width="3.54545"/>
                            </svg>
                            Качество
                        </div>
                        <div class="quality">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.6"
                                      d="M1.77273 7.42857C1.77273 4.30493 4.30493 1.77273 7.42857 1.77273H18.5714C21.6951 1.77273 24.2273 4.30493 24.2273 7.42857V18.5714C24.2273 21.6951 21.6951 24.2273 18.5714 24.2273H7.42857C4.30493 24.2273 1.77273 21.6951 1.77273 18.5714V7.42857Z"
                                      stroke="#FF5C00" stroke-width="3.54545"/>
                            </svg>
                            Качество
                        </div>
                    </div>
                    <div class="about-btn about-btn--colored btn btn--round btn--bordered">
                        Кнопка действия
                    </div>
                </div>
                <div class="about-image">
                    <img class="gif" src="{{asset('/images/about1.gif')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="partnership">
        <div class="container">
            <div class="partnership-block">
                <div class="partnership-title">
                    Стать нашим партнёром - легко
                </div>
                <div class="partnership-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="partnership-link">
                    <a href="">Подробнее</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="about-block">
                <div class="about-text">
                    <div class="about-title">
                        Title Name
                    </div>
                    <div class="about-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et <b>dolore magna aliqua</b>. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. <b>Excepteur sint occaecat</b> cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </div>
                    <div class="about-btn btn btn--blue btn--round btn--bordered">
                        Кнопка действия
                    </div>
                </div>
                <div class="about-image">
                    <img class="gif" src="{{asset('/images/about2.gif')}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
