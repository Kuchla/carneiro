@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.gallery.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.galleries.index') }}">
        {{ trans('adminlte::adminlte.gallery.page') }}
    </a>

    <small>
        {{ trans('adminlte::adminlte.breadcrumbs.show') }}
    </small>
</h1>
@stop

@section('content')
<br>
<div class="container">
    <p class="card-text"> <strong>Link:</strong>  {{ route('site.gallery.filter.album', $galleries->first()->referent) }}</p>
    <div class="row justify-content-md-center">
        @foreach ($galleries as $gallery)
        @foreach($gallery->images as $item)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ url('storage/'.@$item->name) }}" class="bd-placeholder-img card-img-top" width="85%"
                    height="195" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                    focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em"></text>
                </svg>
                <div class="card-body mb-4">
                    <p class="card-text">{{ $gallery->referent }}</p>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="btn-group mb-4">
                            <form action="{{ route('admin.galleries.destroy', $item->id) }}" method="post"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger mb-4">
                                    <i class="fa fa-trash"> {{ trans('adminlte::adminlte.btn.delete') }}</i></button>
                            </form>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        @endforeach
        @endforeach
    </div>
</div>
@stop
