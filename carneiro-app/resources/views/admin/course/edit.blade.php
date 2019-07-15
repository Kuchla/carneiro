@extends('adminlte::page')

@section('title', 'courses')

@section('content_header')
<h1>
    <a href="{{ route('admin.courses.index') }}">
        Courses
    </a>
    <small>Edite</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
</ol>
@stop

@section('content')

@include('admin.course.partials._summernote_pt_BR')
<form method="post" action="{{ route('admin.courses.update', ['course' => $course->id]) }}"  enctype="multipart/form-data">
    @method('PATCH')
    @csrf

    @include('admin.course.partials._form')

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
        var content = {!! json_encode($course->description) !!};
        $('#summernote').summernote('description', content);
    });
</script>

@stop
