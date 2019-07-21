@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.gallery.page'))

@section('content_header')
<h1>
    {{ trans('adminlte::adminlte.gallery.page') }}
    <small>
        {{ trans('adminlte::adminlte.breadcrumbs.index') }}
    </small>
</h1>

<ol class="breadcrumb">
    <a class="btn btn-primary" href="{{ route('admin.galleries.create') }}">
        <i class="fa fa-plus"> {{ trans('adminlte::adminlte.btn.new') }}</i>
    </a>
</ol>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="album py-5 bg-light">
                    <div class="container">
                        @if(count($galleries) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ trans('adminlte::adminlte.id') }}</th>
                                    <th scope="col">{{ trans('adminlte::adminlte.gallery.category') }}</th>
                                    <th scope="col">{{ trans('adminlte::adminlte.admin') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                <tr>
                                    <td>{{ $gallery[0]->id }}</td>
                                    <td>{{ $gallery[0]->category }}</td>
                                    <td>
                                        <a class="btn btn-success"
                                            href="{{ route('admin.galleries.show', ['category' => $gallery[0]->category]) }}">
                                            <i class="fa fa-eye"> {{ trans('adminlte::adminlte.btn.show') }}</i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop