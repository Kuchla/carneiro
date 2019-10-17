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
<div class="box box-widget widget-user-2">
    <div class="widget-user-header bg-gray">
        <div class="widget-user-image">
            <img class="img" src="{{ url('storage/'.@$course->logo) }}" alt="logo">
        </div>
        <h3 class="widget-user-username"><strong>Nome do Curso: </strong> {{$course->name}}</h3>
        <h5 class="widget-user-desc">
            @if($course->schedule_subsequent)
            <a target="_blank" class="btn btn-primary btn-sm" href="{{ url('storage/'.$course->schedule_subsequent) }}">
                <i class="fa fa-download"></i> Ementa curso subsequente </a>
            @endif
        </h5>
        <h5 class="widget-user-desc">
            @if($course->schedule_integrated)
            <a target="_blank" class="btn btn-primary btn-sm" href="{{ url('storage/'.$course->schedule_integrated) }}">
                <i class="fa fa-download"></i> Ementa curso integrado </a>
            @endif
        </h5>
        <strong>Descrição: </strong>
        {!! $course->description !!}
    </div>
</div>
<a class="btn btn-warning" href="{{ route('admin.courses.edit', ['id' => $course->id]) }}">
    <i class="fa fa-edit"> {{ trans('adminlte::adminlte.btn.edit') }}</i>
</a>
@stop
