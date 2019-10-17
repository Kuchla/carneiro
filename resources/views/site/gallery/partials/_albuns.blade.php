
@foreach ($albuns as $album)
<li class="show-gallery-menu" class="filter-active" id="gm" data-filter=".{{$album}}">
    {{ $album }}
</li>
@endforeach

