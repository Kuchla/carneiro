@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.link.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.users.index') }}">
        {{ trans('adminlte::adminlte.link.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.edit') }}</small>
</h1>
@stop

@section('content')

<form method="post" action="{{ route('admin.users.update', ['user' => $user->id]) }}">
    @method('PATCH')
    @csrf
    @include('admin.user.partials._form')
@stop
