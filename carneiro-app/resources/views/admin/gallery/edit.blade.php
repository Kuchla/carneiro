@extends('adminlte::page')

@section('title', 'courses')

@section('content_header')
<h1>
    <a href="{{ route('admin.galleries.index') }}">
        Courses
    </a>
    <small>Edite</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
</ol>
@stop

@section('content')

<form method="post" action="{{ route('admin.galleries.update', ['gallery' => $gallery->id]) }}"  enctype="multipart/form-data">
    @method('PATCH')

    @include('admin.gallery.partials._form')

@stop
