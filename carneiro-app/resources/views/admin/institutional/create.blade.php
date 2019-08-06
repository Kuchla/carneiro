@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.institutional.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.institutionals.index') }}">
        {{ trans('adminlte::adminlte.institutional.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.create') }}</small>
</h1>
@stop

@section('content')

@include('admin.institutional.partials._summernote_pt_BR')

<form method="POST" action="{{ route('admin.institutionals.store') }}" role="form" enctype="multipart/form-data">

    @include('admin.institutional.partials._form')

@stop