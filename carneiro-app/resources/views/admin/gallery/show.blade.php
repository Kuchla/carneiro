@extends('adminlte::page')

@section('title', 'courses')

@section('content_header')
<h1>
  <a href="{{ route('admin.courses.index') }}">
    Courses
  </a>
  <small>Show</small>
</h1>

@stop

@section('content')

<div class="container">

  <div class="row justify-content-md-center">
    @forelse ($galleries as $gallery)
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="{{ url('storage/'.@$gallery->image) }}" class="bd-placeholder-img card-img-top" width="100%"
          height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
          role="img" aria-label="Placeholder: Thumbnail">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
          dy=".3em">Thumbnail</text>
        </svg>
        <div class="card-body">
          <p class="card-text">{{ $gallery->description }}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a class="btn btn-sm btn-warning"
                href="{{ route('admin.galleries.edit', ['category' => $gallery->id]) }}">
                <i class="fa fa-edit"> {{ trans('adminlte::adminlte.btn.edit') }}</i>
              </a>
              <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="post"
                style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">
                   <i class="fa fa-trash"> {{ trans('adminlte::adminlte.btn.delete') }}</i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @empty
    <p>Without products!</p>
    @endforelse
  </div>
</div>
@stop