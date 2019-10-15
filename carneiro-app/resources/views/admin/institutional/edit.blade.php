@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.institutional.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.institutionals.index') }}">
        {{ trans('adminlte::adminlte.institutional.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.edit') }}</small>
</h1>
@stop

@section('content')

<form method="post" action="{{ route('admin.institutionals.update', ['institutional' => $institutional->id]) }}"  enctype="multipart/form-data">
    @method('PATCH')
    @include('admin.institutional.partials._form')
@stop
