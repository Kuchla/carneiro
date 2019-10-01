@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.course.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.courses.index') }}">
        {{ trans('adminlte::adminlte.course.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.create') }}</small>
</h1>
@stop

@section('content')

<form method="POST" action="{{ route('admin.courses.store') }}" role="form" enctype="multipart/form-data">

    @include('admin.course.partials._form')

@stop
