@extends('adminlte::page')

@section('title', 'courses')

@section('content_header')
<h1>
  <a href="{{ route('admin.news.index') }}">
    News
  </a>
  <small>Show</small>
</h1>

@stop

@section('content')

<div class="box box-widget widget-user-2">
  <!-- Add the bg color to the header using any of the bg-* classes -->
  <div class="widget-user-header bg-gray">
    <div class="widget-user-image">
      <img class="img" src="{{ url('storage/'.@$news->image) }}" alt="logo">
    </div>
    <!-- /.widget-user-image -->
    <h3 class="widget-user-username"><strong>Título: </strong> {{$news->title}}</h3>
    <h5 class="widget-user-desc"><strong>Categoria: </strong> {{$news->category}}
    </h5>
  </div>
  <div class="box-footer no-padding">
    <ul class="nav nav-stacked">
      <li><strong>Texto da notícia: </strong> {!! $news->description !!}
      </li>
    </ul>
  </div>
</div>
<a class="btn btn-warning" href="{{ route('admin.news.edit', ['id' => $news->id]) }}">
  <i class="fa fa-edit"> Editar</i>
</a>
@stop