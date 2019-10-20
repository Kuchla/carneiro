@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.link.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.links.index') }}">
        {{ trans('adminlte::adminlte.link.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.create') }}</small>
</h1>
@stop

@section('content')

<form  method="POST" action="{{ route('admin.links.store') }}" role="form" enctype="multipart/form-data">
    @csrf
    @include('admin.link.partials._form')
@stop
