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
<div class="box-body">
    <ul class="list-group">
        <li class="list-group-item">
            <b>Título </b>
            <p class="text-muted">
                {{$link->title}}
            </p>
        </li>
        <li class="list-group-item">
            <b>Endereço eletrônico</b>
            <p class="text-muted">
                {{$link->url}}
            </p>
        </li>
        <li class="list-group-item">
            <b>Imagem</b>
            <p class="text-muted">
                <div class="row margin-bottom">
                    <div class="col-sm-3">
                        <img class="img" src="{{ url('storage/'.@$link->image) }}" alt="image"
                            style="max-width: 150px;">
                    </div>
                </div>
            </p>
        </li>
    </ul>
    <a class="btn btn-warning" href="{{ route('admin.links.edit', ['id' => $link->id]) }}">
        <i class="fa fa-edit"> Editar</i>
    </a>
</div>
@stop
