@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.news.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.news.index') }}">
        {{ trans('adminlte::adminlte.news.page') }}
    </a>

    <small>
        {{ trans('adminlte::adminlte.breadcrumbs.edit') }}
    </small>
</h1>
@stop

@section('content')

<form method="post" action="{{ route('admin.news.update', ['news' => $news->id]) }}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    @include('admin.news.partials._form')
@stop
