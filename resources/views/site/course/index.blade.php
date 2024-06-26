@extends('site.layouts.app')

@section('title', 'Index')

@section('content')

<section id="page-default">
    <div class="container">
        <header class="section-header">
            <h3>{{ $course->name}}</h3>
        </header>
        <br>
        <div class="row">
            <div class="col-lg-2 wow fadeInUp">
                <img src="{{ url('storage/'.$course->logo) }}" class="img-fluid" alt="image">
            </div>
            <div class="col-lg-10 wow fadeInUp pt-5 pt-lg-0">
                <h5 class="widget-user-desc">
                    @if($course->schedule_subsequent)
                    <a target="_blank" class="btn btn-primary btn-sm mb-1" href="{{ url('storage/'.$course->schedule_subsequent) }}">
                        <i class="fa fa-download"></i> Ementa curso subsequente </a>
                    @endif
                    @if($course->schedule_integrated)
                    <a target="_blank" class="btn btn-primary btn-sm mb-1" href="{{ url('storage/'.$course->schedule_integrated) }}">
                        <i class="fa fa-download"></i> Ementa curso integrado </a>
                    @endif
                </h5>
                <p>
                    {!! $course->description !!}
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
