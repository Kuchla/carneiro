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
                <div class="row gallery-search">
                    <div class="col-md-5 mb-2">
                        <select id="filter-category" class="form-control" id="exampleFormControlSelect1">
                            <option value="0">Todas as categorias</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category }}">{{ translate_category($category) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-5 mb-2">
                        <select id="filter-album" class="form-control" id="exampleFormControlSelect1">
                            <option value="0">Todas os álbuns</option>
                            @foreach ($albuns as $album)
                            <option value="{{ $album }}">{{ $album }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mb-2">
                            <button type="button" class="btn btn-primary" id="filter-search">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-form">
            @include('site.gallery.partials._items')

        </div>
    </div>
</section>

@endsection
