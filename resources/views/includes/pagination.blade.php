@if ($paginator->hasPages())
    <div class="page-navigation">
        @if ($paginator->onFirstPage())
            <div class="nav-text">
                В начало
            </div>
            <div class="nav-arrow">
                <svg width="124" height="24" viewBox="0 0 124 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M123.061 13.0607C123.646 12.4749 123.646 11.5251 123.061 10.9393L113.515 1.3934C112.929 0.807611 111.979 0.807611 111.393 1.3934C110.808 1.97919 110.808 2.92893 111.393 3.51472L119.879 12L111.393 20.4853C110.808 21.0711 110.808 22.0208 111.393 22.6066C111.979 23.1924 112.929 23.1924 113.515 22.6066L123.061 13.0607ZM120 13.5H122V10.5H120V13.5Z"
                        fill="#2749A3"/>
                    <path
                        d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.93934 10.9393ZM4 10.5H2V13.5H4V10.5Z"
                        fill="#2749A3"/>
                </svg>
            </div>
        @else
            <a href="{{ $paginator->url(1) }}" class="nav-text">
                В начало
            </a>
            <a href="{{ $paginator->previousPageUrl() }}" class="nav-arrow">
                <svg width="124" height="24" viewBox="0 0 124 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M123.061 13.0607C123.646 12.4749 123.646 11.5251 123.061 10.9393L113.515 1.3934C112.929 0.807611 111.979 0.807611 111.393 1.3934C110.808 1.97919 110.808 2.92893 111.393 3.51472L119.879 12L111.393 20.4853C110.808 21.0711 110.808 22.0208 111.393 22.6066C111.979 23.1924 112.929 23.1924 113.515 22.6066L123.061 13.0607ZM120 13.5H122V10.5H120V13.5Z"
                        fill="#2749A3"/>
                    <path
                        d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.93934 10.9393ZM4 10.5H2V13.5H4V10.5Z"
                        fill="#2749A3"/>
                </svg>
            </a>
        @endif
        @php
            $start = $paginator->currentPage() - 2; // show 3 pagination links before current
            $end = $paginator->currentPage() + 2; // show 3 pagination links after current
            if ($start < 1) {
                $start = 1; // reset start to 1
                $end += 1;
            }
            if ($end >= $paginator->lastPage()) $end = $paginator->lastPage(); // reset end to last page
        @endphp
        @for ($i = $start; $i <= $end; $i++)
            <a href="{{ $paginator->url($i) }}"
               class="nav-item {{ ($paginator->currentPage() == $i) ? ' selected' : '' }}">
                {{$i}}
            </a>
        @endfor
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="nav-arrow">
                <svg width="124" height="24" viewBox="0 0 124 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M123.061 13.0607C123.646 12.4749 123.646 11.5251 123.061 10.9393L113.515 1.3934C112.929 0.807611 111.979 0.807611 111.393 1.3934C110.808 1.97919 110.808 2.92893 111.393 3.51472L119.879 12L111.393 20.4853C110.808 21.0711 110.808 22.0208 111.393 22.6066C111.979 23.1924 112.929 23.1924 113.515 22.6066L123.061 13.0607ZM120 13.5H122V10.5H120V13.5Z"
                        fill="#2749A3"/>
                    <path
                        d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.93934 10.9393ZM4 10.5H2V13.5H4V10.5Z"
                        fill="#2749A3"/>
                </svg>
            </a>
            <a href="{{ $paginator->url($paginator->lastPage()) }}" class="nav-text">
                В конец
            </a>
        @else
            <div class="nav-arrow">
                <svg width="124" height="24" viewBox="0 0 124 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M123.061 13.0607C123.646 12.4749 123.646 11.5251 123.061 10.9393L113.515 1.3934C112.929 0.807611 111.979 0.807611 111.393 1.3934C110.808 1.97919 110.808 2.92893 111.393 3.51472L119.879 12L111.393 20.4853C110.808 21.0711 110.808 22.0208 111.393 22.6066C111.979 23.1924 112.929 23.1924 113.515 22.6066L123.061 13.0607ZM120 13.5H122V10.5H120V13.5Z"
                        fill="#2749A3"/>
                    <path
                        d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.93934 10.9393ZM4 10.5H2V13.5H4V10.5Z"
                        fill="#2749A3"/>
                </svg>
            </div>
            <div class="nav-text">
                В конец
            </div>
        @endif
    </div>
@endif
