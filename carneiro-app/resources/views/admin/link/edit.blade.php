@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.link.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.links.index') }}">
        {{ trans('adminlte::adminlte.link.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.edit') }}</small>
</h1>
@stop

@section('content')

<form method="post" action="{{ route('admin.links.update', ['link' => $link->id]) }}"  enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    @include('admin.link.partials._form')
@stop
