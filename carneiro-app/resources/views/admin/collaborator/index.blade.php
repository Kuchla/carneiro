@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.collaborator.page'))

@section('content_header')
<h1>
    {{ trans('adminlte::adminlte.collaborator.page') }}
    <small>
        {{ trans('adminlte::adminlte.breadcrumbs.index') }}
    </small>
</h1>

<ol class="breadcrumb">
    <a class="btn btn-primary" href="{{ route('admin.collaborators.create') }}">
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
                        @if(count($collaborators) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ trans('adminlte::adminlte.id') }}</th>
                                    <th scope="col">{{ trans('adminlte::adminlte.collaborator.name') }}</th>
                                    <th scope="col">{{ trans('adminlte::adminlte.collaborator.role') }}</th>
                                    <th scope="col">{{ trans('adminlte::adminlte.admin') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collaborators as $collaborator)
                                <tr>
                                    <td> {{ $collaborator->id }}</td>
                                    <td> {{ $collaborator->name }}</td>
                                    <td> {{ $collaborator->role}}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('admin.collaborators.show', $collaborator) }}">
                                            <i class="fa fa-eye"> {{ trans('adminlte::adminlte.btn.show') }}</i>
                                        </a>
                                        <a class="btn btn-warning" href="{{ route('admin.collaborators.edit', $collaborator) }}">
                                            <i class="fa fa-edit"> {{ trans('adminlte::adminlte.btn.edit') }}</i>
                                        </a>
                                        <form action="{{ route('admin.collaborators.destroy', $collaborator) }}" method="post"
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
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop