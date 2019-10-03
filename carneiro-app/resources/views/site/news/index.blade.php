@extends('site.layouts.app')

@section('title', 'Index')

@section('content')
<section id="about">
    <article>
        <div class="container">
            <header class="section-header">
                <h3 class="section-title">Notícias</h3>
            </header>
            <div class="row about-container">
                <div class="col-lg-12 content order-lg-1 order-2">
                    <div class="row">
                        <div class="col-12 pb-5">
                            <div class="row">
                                <div class="col-12 col-md-12 pt-2 pl-md-1 mb-3 mb-lg-4">
                                    <div class="row">
                                        @foreach ($news as $item)
                                        <div class="col-4 pb-1 pt-0 pr-1">
                                            <div class="card border-1 rounded-1 text-white overflow zoom">
                                                <div class="position-relative">
                                                    <div class="ratio_right-cover-2 image-wrapper">
                                                        <a href="{{ route('site.news.show', $item->id) }}">
                                                            <img class="rounded img-fluid"
                                                                src="{{ url('storage/'.$item->image) }}"
                                                                alt="Image description">
                                                        </a>
                                                    </div>
                                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                        <div class="p-1 badge badge-primary rounded-1"
                                                            >{{$item->category}}</div>
                                                        <a href="{{ route('site.news.show', $item->first()->id) }}">
                                                            <h2 class="h5 text-white my-1">{{ $item->title }}</h2>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            {{ $news->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
@endsection
