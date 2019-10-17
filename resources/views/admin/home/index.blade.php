@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
<h1>
    Dashboard
    <small>Índice</small>
</h1>

@stop

@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ $courses }}</h3>

                <p>Curso(s)</p>
            </div>
            <div class="icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <a href="{{ route('admin.courses.index') }}" class="small-box-footer">Visualizar<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ $links }}<sup style="font-size: 20px"></sup></h3>

                <p>Link(s) de Utilidades</p>
            </div>
            <div class="icon">
                <i class="fas fa-link"></i>
            </div>
            <a href="{{ route('admin.links.index') }}" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $news }}</h3>

                <p>Notícias</p>
            </div>
            <div class="icon">
                <i class="far fa-newspaper"></i>
            </div>
            <a href="{{ route('admin.news.index') }}" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ $photos }}</h3>

                <p>Foto(s)</p>
            </div>
            <div class="icon">
                <i class="fas fa-photo-video"></i>
            </div>
            <a href="{{ route('admin.galleries.index') }}" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
@stop
