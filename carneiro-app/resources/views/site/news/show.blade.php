@extends('site.layouts.app')

@section('title', 'Index')

@section('content')

<section id="about">
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                    <header class="section-header">
                            <h3>{{ $news->title}}</h3>
                        </header>
                        <br>
                <a href="#">
                    <img class="img-fluid" src="{{ url('storage/'.$news->image) }}" alt="">
                </a>
                {!! $news->description !!}
            </div>
        </div>
    </div>
</article>
</section>

@endsection