@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.collaborator.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.collaborators.index') }}">
        {{ trans('adminlte::adminlte.collaborator.page') }}
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
            <b>Nome do Colaborador: </b>
            <p class="text-muted">
                {{$collaborator->name}}
            </p>
        </li>
        <li class="list-group-item">
            <b>Cargo</b>
            <p class="text-muted">
                {{$collaborator->role}}
            </p>
        </li>
        <li class="list-group-item">
            <b>Status</b>
            <p class="text-muted">
                {{$collaborator->active ? 'Ativo' : 'Desativado'}}
            </p>
        </li>

        <li class="list-group-item">
            <b>Imagem</b>
            <p class="text-muted">
                <div class="row margin-bottom">
                    <div class="col-sm-3">
                        <img class="img" src="{{ url('storage/'.@$collaborator->image) }}" alt="image"
                            style="max-width: 150px;">
                    </div>
                </div>
            </p>
        </li>
    </ul>
    <a class="btn btn-warning" href="{{ route('admin.collaborators.edit', ['id' => $collaborator->id]) }}">
        <i class="fa fa-edit"> {{ trans('adminlte::adminlte.btn.edit') }}</i>
    </a>
</div>




@stop
