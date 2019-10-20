@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.user.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.users.index') }}">
        {{ trans('adminlte::adminlte.user.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.create') }}</small>
</h1>
@stop

@section('content')

<form  method="POST" action="{{ route('admin.users.store') }}" role="form">
    @csrf
    @include('admin.user.partials._form')
@stop
