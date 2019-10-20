@extends('adminlte::page')

@section('title', trans('adminlte::adminlte.news.page'))

@section('content_header')
<h1>
    {{ trans('adminlte::adminlte.news.page') }}
    <small>
        {{ trans('adminlte::adminlte.breadcrumbs.index') }}
    </small>
</h1>

<ol class="breadcrumb">
    <a class="btn btn-primary" href="{{ route('admin.news.create') }}">
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
                        @if(count($news) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ trans('adminlte::adminlte.id') }}</th>
                                    <th scope="col">{{ trans('adminlte::adminlte.news.title') }}</th>
                                    <th scope="col">{{ trans('adminlte::adminlte.admin') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($news as $news)
                                <tr>
                                    <td>{{ $news->id }}</td>
                                    <td> {{ $news->title }}</td>
                                    <td>
                                        <a class="btn btn-success"
                                            href="{{ route('admin.news.show', ['id' => $news->id]) }}">
                                            <i class="fa fa-eye"> {{ trans('adminlte::adminlte.btn.show') }}</i>
                                        </a>
                                        <a class="btn btn-warning"
                                            href="{{ route('admin.news.edit', ['id' => $news->id]) }}">
                                            <i class="fa fa-edit"> {{ trans('adminlte::adminlte.btn.edit') }}</i>
                                        </a>

                                        <form action="{{ route('admin.news.destroy', $news) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"> {{ trans('adminlte::adminlte.btn.delete') }}</i>
                                            </button>
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
