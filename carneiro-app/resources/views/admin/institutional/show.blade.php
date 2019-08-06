@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.institutional.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.institutionals.index') }}">
        {{ trans('adminlte::adminlte.institutional.page') }}
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
    
    <!-- /.widget-user-image -->
    <h3 class="widget-user-username"><strong>Título: </strong> {{$institutional->title}}</h3>
    </h5>
  </div>
  <div class="box-footer no-padding">
    <ul class="nav nav-stacked">
      <li><strong>Sobre o colégio: </strong> {!! $institutional->about !!}
      </li>
    </ul>
  </div>
</div>
<a class="btn btn-warning" href="{{ route('admin.institutionals.edit', ['id' => $institutional->id]) }}">
  <i class="fa fa-edit"> Editar</i>
</a>
@stop