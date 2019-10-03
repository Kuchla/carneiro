<section id="news" class="clearfix">
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
                                    @foreach ($news as $news)
                                    <div class="col-4 pb-1 pt-0 pr-1">
                                        <div class="card border-1 rounded-1 text-white overflow zoom">
                                            <div class="position-relative">
                                                <div class="ratio_right-cover-2 image-wrapper">
                                                    <a href="{{ route('site.news.show', $news->id) }}">
                                                        <img class="rounded img-fluid"
                                                            src="{{ url('storage/'.$news->image) }}"
                                                            alt="Image description">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <a class="p-1 badge badge-primary rounded-0"
                                                        href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">{{$news->category}}</a>
                                                    <a href="{{ route('site.news.show', $news->first()->id) }}">
                                                        <h2 class="h5 text-white my-1">{{ $news->title }}</h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <center><strong><a href="{{ route('site.news')}}">Ver todas as notícias >></a></strong>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
