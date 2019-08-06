@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.institutional.page'))

@section('content_header')
<h1>
    <a href="{{ route('admin.institutionals.index') }}">
        {{ trans('adminlte::adminlte.institutional.page') }}
    </a>
    <small>{{ trans('adminlte::adminlte.breadcrumbs.edit') }}</small>
</h1>
@stop

@section('content')

@include('admin.institutional.partials._summernote_pt_BR')
<form method="post" action="{{ route('admin.institutionals.update', ['institutional' => $institutional->id]) }}"  enctype="multipart/form-data">
    @method('PATCH')

    @include('admin.institutional.partials._form')

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
        var content = {!! json_encode($institutional->about) !!};
        $('#summernote').summernote('description', content);
    });
</script>

@stop
