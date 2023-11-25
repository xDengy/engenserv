<div class="breadcrumbs">
    @foreach($links as $index => $link)
        @if(isset($link['link']))
            <a href="{{$link['link']}}">{{$link['title']}}</a>
        @else
            <div>{{$link['title']}}</div>
        @endif
        @if($index < count($links) - 1)
            /
        @endif
    @endforeach
</div>
