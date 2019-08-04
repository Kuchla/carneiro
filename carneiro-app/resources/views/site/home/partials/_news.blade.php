<!--==========================
      News Section
    ============================-->
<section id="news" class="clearfix">
    <div class="container">

        <header class="section-header">
            <h3 class="section-title">Notícias</h3>
        </header>

        <div class="row">
            <div class="col-lg-12">
                <ul id="news-flters">
                    <li data-filter=".filter-app">Eventos</li>
                    <li data-filter=".filter-app">Informações</li>
                    <li data-filter="*" class="filter-active">Ver todas</li>
                </ul>
            </div>
        </div>

        <div class="row about-container">

            <div class="col-lg-12 content order-lg-1 order-2">

                <!--Start news-->
                <div class="row">
                    <div class="col-12 pb-5">
                        <!--DIV START-->
                        <div class="row">
                            <!--Start slider news-->
                            <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                                <div id="featured" class="carousel slide carousel" data-ride="carousel">
                                    <!--dots navigate-->
                                    <!-- <ol class="carousel-indicators top-indicator">
                                        <li data-target="#featured" data-slide-to="0" class="active"></li>                                   
                                    </ol> -->

                                    <!--carousel inner-->
                                    <div class="carousel-inner">
                                        <!--Item slider-->
                                        <div class="carousel-item active">
                                            <div class="card border-0 rounded-0 text-light overflow zoom">
                                                <div class="position-relative">
                                                    <!--thumbnail img-->
                                                    <div class="ratio_left-cover-1 image-wrapper">
                                                        <a
                                                            href="{{ route('site.news.show', $news->first()->id) }}">
                                                            <img class="border-1 rounded-1 img-fluid w-100"
                                                                src="{{ url('storage/'.$news->first()->image) }}"
                                                                alt="Image description">
                                                        </a>
                                                    </div>
                                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                        <!--title-->
                                                        <a
                                                            href="{{ route('site.news.show', $news->first()->id) }}">
                                                            <h2 class="h3 post-title text-white my-1">{{$news->first()->title}}</h2>
                                                        </a>
                                                        <!-- meta title -->
                                                        <div class="news-meta">
                                                            <span class="news-author">by <a
                                                                    class="text-white font-weight-bold"
                                                                    href="../category/author.html">{{$news->first()->user->name}}</a></span>
                                                            <span class="news-date">{{$news->first()->created_at}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end carousel inner-->
                                </div>

                                <!--navigation-->
                                <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--End slider news-->

                            <!--Start box news-->
                            <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                                <div class="row">
                                    @foreach ($news as $news)
                                    <!--news box-->
                                    @if (!$loop->first)
                                    <div class="col-6 pb-1 pt-0 pr-1">
                                        <div class="card border-1 rounded-1 text-white overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_right-cover-2 image-wrapper">
                                                    <a href="{{ route('site.news.show', $news->id) }}">
                                                        <img class="rounded img-fluid"
                                                        src="{{ url('storage/'.$news->image) }}"
                                                            alt="Image description">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!-- category -->
                                                    <a class="p-1 badge badge-primary rounded-0"
                                                        href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">{{$news->category}}</a>

                                                    <!--title-->
                                                    <a
                                                        href="{{ route('site.news.show', $news->first()->id) }}">
                                                        <h2 class="h5 text-white my-1">{{ $news->title }}</h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @endforeach
                                </div>
                            </div>
                            <!--End box news-->

                        </div>
                        <!-- <p>
                            <center><strong><a href="#">Ver todas as notícias >></a></strong> </center>
                        </p> -->
                    </div>
                    <!--end code-->
                </div>
            </div>
        </div>
    </div>
</section>