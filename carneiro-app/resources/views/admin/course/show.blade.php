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
        <h5 class="widget-user-desc"><strong>Duração do Curso: </strong> {{$course->duration}}
        </h5>
        <h5 class="widget-user-desc">
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#ExemploModalCentralizado">Visualizar Horarios
            </button>
        </h5>
    </div>
    <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
            <li><strong>Descrição: </strong> {!! $course->description !!}
            </li>
        </ul>
    </div>
</div>

<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Arquivo PDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <embed src="{{ url('storage/'.@$course->schedules) }}" frameborder="0" width="100%" height="150px">
            </div>
        </div>
    </div>
</div>

<a class="btn btn-warning" href="{{ route('admin.courses.edit', ['id' => $course->id]) }}">
    <i class="fa fa-edit"> {{ trans('adminlte::adminlte.btn.edit') }}</i>
</a>
@stop