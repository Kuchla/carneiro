@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.institutional.page'))

@section('content_header')
<h1>
    {{ trans('adminlte::adminlte.institutional.page') }}
    <small>
        {{ trans('adminlte::adminlte.breadcrumbs.index') }}
    </small>
</h1>

<ol class="breadcrumb">

    @if(count($institutionals) < 1)
        <a class="btn btn-primary" href="{{ route('admin.institutionals.create') }}">
            <i class="fa fa-plus"> {{ trans('adminlte::adminlte.btn.new') }}</i>
        </a>
    @endif
</ol>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="album py-5 bg-light">
                    <div class="container">
                        @if(count($institutionals) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ trans('adminlte::adminlte.id') }}</th>
                                    <th scope="col">{{ trans('adminlte::adminlte.institutional.title') }}</th>
                                    <th scope="col">{{ trans('adminlte::adminlte.admin') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($institutionals as $institutional)
                                <tr>
                                    <td> {{ $institutional->id }}</td>
                                    <td> {{ $institutional->title }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('admin.institutionals.show', $institutional) }}">
                                            <i class="fa fa-eye"> {{ trans('adminlte::adminlte.btn.show') }}</i>
                                        </a>
                                        <a class="btn btn-warning" href="{{ route('admin.institutionals.edit', $institutional) }}">
                                            <i class="fa fa-edit"> {{ trans('adminlte::adminlte.btn.edit') }}</i>
                                        </a>
                                        <form action="{{ route('admin.institutionals.destroy', $institutional) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"> <i class="fa fa-trash">
                                                    {{ trans('adminlte::adminlte.btn.delete') }}</i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
