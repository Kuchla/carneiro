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
<div class="box box-widget">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-gray">
        <!-- <div class="widget-user-image">
        </div> -->
        <h3 class="widget-user-username"><strong>Usuário: </strong> {{$user->name}}</h3>
        <h5 class="widget-user-desc"><strong>Email: </strong> {{$user->email}}
        </h5>
    </div>
</div>
<a class="btn btn-warning" href="{{ route('admin.users.edit', ['id' => $user->id]) }}">
    <i class="fa fa-edit"> Editar</i>
</a>
@stop
