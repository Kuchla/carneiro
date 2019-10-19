@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.course.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.courses.index') }}">
        {{ trans('adminlte::adminlte.course.page') }}
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
            <b>Nome do Curso: </b>
            <p class="text-muted">
                {{$course->name}}
            </p>
        </li>
        <li class="list-group-item">
            <b>Ementas</b>
            <p class="text-muted">
                @if($course->schedule_subsequent)
                <a target="_blank" class="btn btn-primary btn-sm"
                    href="{{ url('storage/'.$course->schedule_subsequent) }}">
                    <i class="fa fa-download"></i> Ementa curso subsequente </a>
                @endif
                @if($course->schedule_integrated)
                <a target="_blank" class="btn btn-primary btn-sm" href="{{ url('storage/'.$course->schedule_integrated) }}">
                    <i class="fa fa-download"></i> Ementa curso integrado </a>
                @endif
            </p>
        </li>
        <li class="list-group-item">
            <b>Descrição</b>
            <p class="text-muted">
                {!! $course->description !!}
            </p>

        </li>
        <li class="list-group-item">
            <b>Imagem</b>
            <p class="text-muted">
                <div class="row margin-bottom">
                    <div class="col-sm-3">
                        <img class="img" src="{{ url('storage/'.@$course->logo) }}" alt="image"
                            style="max-width: 150px;">
                    </div>
                </div>
            </p>
        </li>
    </ul>
    <a class="btn btn-warning" href="{{ route('admin.courses.edit', ['id' => $course->id]) }}">
        <i class="fa fa-edit"> {{ trans('adminlte::adminlte.btn.edit') }}</i>
    </a>
</div>
@stop
