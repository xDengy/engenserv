<div class="catalog-section-open sh-mob">
    <div class="catalog-section-open-wrapper">
        <div class="catalog-section-open-title">
            Товары
        </div>
        <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5" d="M13.0607 0.93934C12.4749 0.353553 11.5251 0.353553 10.9393 0.93934L1.3934 10.4853C0.807611 11.0711 0.807611 12.0208 1.3934 12.6066C1.97919 13.1924 2.92893 13.1924 3.51472 12.6066L12 4.12132L20.4853 12.6066C21.0711 13.1924 22.0208 13.1924 22.6066 12.6066C23.1924 12.0208 23.1924 11.0711 22.6066 10.4853L13.0607 0.93934ZM13.5 4V2H10.5V4H13.5Z" fill="white"/>
        </svg>
    </div>
</div>
<div class="catalog-sections">
    @foreach($folders as $folder)
        <div class="section-item">
            <div class="section-info">
                <a href="{{route('catalogDetail', $folder->url)}}" class="section-title">
                    {{$folder->name}}
                </a>
                @if($folder->children)
                    <div class="section-arrow">
                        <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.9393 13.0607C11.5251 13.6464 12.4749 13.6464 13.0607 13.0607L22.6066 3.51472C23.1924 2.92893 23.1924 1.97919 22.6066 1.3934C22.0208 0.807611 21.0711 0.807611 20.4853 1.3934L12 9.87868L3.51472 1.3934C2.92893 0.807611 1.97919 0.807611 1.3934 1.3934C0.807611 1.97919 0.807611 2.92893 1.3934 3.51472L10.9393 13.0607ZM10.5 10V12H13.5V10H10.5Z" fill="#FF5C00"/>
                        </svg>
                    </div>
                @endif
            </div>
            @if($folder->children)
                <div class="section-wrapper">
                    @foreach($folder->children as $child)
                        <a href="{{route('catalogDetail', $child->url)}}" class="subsection-item">
                            {{$child->name}}
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    @endforeach
</div>
