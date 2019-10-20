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
<div class="box-body">
    <ul class="list-group">
        <li class="list-group-item">
            <b>Título</b>
            <p class="text-muted">
                {{$institutional->title}}
            </p>
        </li>
        <li class="list-group-item">
            <b>Descrição</b>
            <p class="text-muted">
                {!! $institutional->about !!}
            </p>
        </li>
    </ul>
    <a class="btn btn-warning" href="{{ route('admin.institutionals.edit', ['id' => $institutional->id]) }}">
            <i class="fa fa-edit"> Editar</i>
        </a>
</div>

@stop
