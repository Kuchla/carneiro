@extends('adminlte::page')

@section('title', 'courses')

@section('content_header')
<h1>
    Courses
    <small>Index</small>
</h1>
<ol class="breadcrumb">
    <a class="btn btn-primary" href="{{ route('admin.courses.create') }}">
        <i class="fa fa-create"> + Novo</i>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Curso</th>
                                    <th scope="col">Duração</th>
                                    <th scope="col">Admin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td> {{ $course->name }}</td>
                                    <td> {{ $course->duration }}</td>
                                    <td>
                                        <a class="btn btn-success"
                                            href="{{ route('admin.courses.show', ['id' => $course->id]) }}">
                                            <i class="fa fa-eye"> Visualizar</i>
                                        </a>
                                        <a class="btn btn-warning"
                                            href="{{ route('admin.courses.edit', ['id' => $course->id]) }}">
                                            <i class="fa fa-edit"> Editar</i>
                                        </a>

                                        <form action="{{ route('admin.courses.destroy', $course) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"> <i class="fa fa-trash">
                                                    Deletar</i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <p>Without products!</p>
                                @endforelse
                            </tbody>
                        </table>
                        <hr>
                        {{-- <a href="{{ route('#') }}" class="btn btn btn-secondary" role="button"
                        aria-disabled="false">Nenhum curso cadastrado!</a> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop