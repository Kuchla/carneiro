@extends('site.layouts.app')

@section('title', 'Index')

@section('content')

<section id="about">
    <div class="container">
        <div class="row">
            @foreach ($news as $news)
            <div class="col-md-6 col-lg-4">
                <div class="block-blog text-left">
                    <a href="#"><img  width="400px" src="{{ url('storage/'.$news->image) }}" alt="img"></a>
                    <div class="content-blog">
                        <h4><a href="#">{{ $news->title }}</span>
                        <a class="pull-right readmore" href="#">read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

   
</section>