@extends('site.layouts.app')

@section('title', 'Index')

@section('content')
<section id="show-gallery" class="clearfix">
    <div class="container">
        <header class="section-header">
            <h3 class="section-title">Galeria</h3>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <ul id="show-gallery-flters">
                    <li lass="gallery-menu" id="gmt" onclick='clickfunc(this)' data-filter="Todas">Todos</li>

                    @foreach ($categories as $category)
                    <li class="show-gallery-menu" class="filter-active" id="gm" data-filter=".{{$category}}">
                        {{ $category }}
                    </li>
                    @endforeach

                    <div class="albuns">
                        @include('site.gallery.partials._albuns')
                    </div>
                </ul>
            </div>

        </div>
        <div class="row show-gallery-container">
            @foreach ($galleries as $gallery)

            @foreach ($gallery->images as $image)


            <div class="col-lg-4 col-md-6 show-gallery-item {{ $gallery->category }}">
                <div class="show-gallery-wrap">
                    <img src="{{ url('storage/'.$image->name) }}" class="img-fluid" alt="">
                    <div class="show-gallery-info">
                        <h4><a id="category" href="#">{{ $gallery->category }}</a></h4>
                        <div>
                            <a href="{{ url('storage/'.$image->name) }}" data-lightbox="show-gallery"
                                data-title="{{ $gallery->description}}" class="link-preview" title="Visualizar"><i
                                    class="ion ion-eye"></i></a>
                            <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach

        </div>
        {{ $galleries->links() }}
    </div>
</section>

@endsection
