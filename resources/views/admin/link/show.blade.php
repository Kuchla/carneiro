@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.link.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.links.index') }}">
        {{ trans('adminlte::adminlte.link.page') }}
    </a>

    <small>
        {{ trans('adminlte::adminlte.breadcrumbs.show') }}
    </small>
</h1>
@stop

@section('content')

<div class="box box-widget widget-user-2">
  <!-- Add the bg color to the header using any of the bg-* classes -->
  <div class="widget-user-header bg-gray">
    <div class="widget-user-image">
    </div>
    <!-- /.widget-user-image -->
    <h3 class="widget-user-username"><strong>Título: </strong> {{$link->title}}</h3>
    <h5 class="widget-user-desc"><strong>URL: </strong> {{$link->url}}
    </h5>
  </div>
</div>
<a class="btn btn-warning" href="{{ route('admin.links.edit', ['id' => $link->id]) }}">
  <i class="fa fa-edit"> Editar</i>
</a>
@stop