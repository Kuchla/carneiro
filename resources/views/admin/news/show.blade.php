@extends('adminlte::page')

@section('title', 'courses')

@section('content_header')
<h1>
    <a href="{{ route('admin.news.index') }}">
        Notícias
    </a>
    <small>Visualizar</small>
</h1>
@stop

@section('content')
<div class="box-body">
    <ul class="list-group">
        <li class="list-group-item">
            <b>Título </b>
            <p class="text-muted">
                {{$news->title}}
            </p>
        </li>
        <li class="list-group-item">
            <b>Categoria</b>
            <p class="text-muted">
                {{ translate_category($news->category) }}
            </p>
        </li>
        <li class="list-group-item">
            <b>Texto da notícia</b>
            <p class="text-muted">
                {!! $news->description !!}
            </p>
        </li>
        <li class="list-group-item">
            <b>Imagem</b>
            <p class="text-muted">
                <div class="row margin-bottom">
                    <div class="col-sm-3">
                        <img class="img" src="{{ url('storage/'.@$news->image) }}" alt="image"
                            style="max-width: 150px;">
                    </div>
                </div>
            </p>
        </li>
    </ul>
    <a class="btn btn-warning" href="{{ route('admin.news.edit', ['id' => $news->id]) }}">
        <i class="fa fa-edit"> Editar</i>
    </a>
</div>
@stop
