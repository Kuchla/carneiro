@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.user.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.users.index') }}">
        {{ trans('adminlte::adminlte.user.page') }}
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
            <b>Usuaário</b>
            <p class="text-muted">
                {{$user->name}}
            </p>
        </li>
        <li class="list-group-item">
            <b>Email</b>
            <p class="text-muted">
                {{$user->email}}
            </p>
        </li>
    </ul>
    <a class="btn btn-warning" href="{{ route('admin.users.edit', ['id' => $user->id]) }}">
        <i class="fa fa-edit"> Editar</i>
    </a>
</div>
@stop
