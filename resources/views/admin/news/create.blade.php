@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.news.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.news.index') }}">
        {{ trans('adminlte::adminlte.news.page') }}
    </a>

    <small>
        {{ trans('adminlte::adminlte.breadcrumbs.create') }}
    </small>
</h1>
@stop

@section('content')

<form method="POST" action="{{ route('admin.news.store') }}" role="form" enctype="multipart/form-data">
    @csrf
    @include('admin.news.partials._form')
@stop
