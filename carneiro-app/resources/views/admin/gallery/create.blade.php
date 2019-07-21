@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.gallery.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.courses.index') }}">
        {{ trans('adminlte::adminlte.gallery.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.create') }}</small>
</h1>
@stop

@section('content')

<form  method="POST" action="{{ route('admin.galleries.store') }}" role="form" enctype="multipart/form-data">
    @csrf

@include('admin.gallery.partials._form')

@stop
