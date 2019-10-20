@extends('site.layouts.app')

@section('title', 'Index')

@section('content')
<section id="page-default">
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <header class="section-header">
                        <h3>{{ $news->title}}</h3>
                    </header>
                    <img class="img-fluid" src="{{ url('storage/'.$news->image) }}" alt="">
                    <br>
                    <br>
                    {!! $news->description !!}
                </div>
            </div>
        </div>
    </article>
</section>
@endsection
