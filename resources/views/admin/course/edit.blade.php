@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.course.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.courses.index') }}">
        {{ trans('adminlte::adminlte.course.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.edit') }}</small>
</h1>
@stop

@section('content')

<form method="post" action="{{ route('admin.courses.update', ['course' => $course->id]) }}" enctype="multipart/form-data">
    @method('PATCH')
    @include('admin.course.partials._form')
@stop
