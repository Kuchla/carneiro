@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.collaborator.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.collaborators.index') }}">
        {{ trans('adminlte::adminlte.collaborator.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.create') }}</small>
</h1>
@stop

@section('content')

<form method="POST" action="{{ route('admin.collaborators.store') }}" role="form" enctype="multipart/form-data">

    @include('admin.collaborator.partials._form')

@stop