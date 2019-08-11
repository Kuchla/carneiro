@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.collaborator.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.collaborators.index') }}">
        {{ trans('adminlte::adminlte.collaborator.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.edit') }}</small>
</h1>
@stop

@section('content')

<form method="post" action="{{ route('admin.collaborators.update', ['collaborator' => $collaborator->id]) }}"  enctype="multipart/form-data">
    @method('PATCH')

    @include('admin.collaborator.partials._form')

@stop
