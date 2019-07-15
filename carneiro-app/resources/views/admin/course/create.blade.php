@extends('adminlte::page')

@section('title', 'courses')

@section('content_header')
<h1>
    <a href="{{ route('admin.courses.index') }}">
        Courses
    </a>
    <small>Create</small>
</h1>
@stop

@section('content')

@include('admin.course.partials._summernote_pt_BR')
<form  method="POST" action="{{ route('admin.courses.store') }}" role="form" enctype="multipart/form-data">
    @csrf


@include('admin.course.partials._form')

@stop
