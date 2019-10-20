<section id="links" class="wow fadeIn">
    <div class="container">
        <header class="section-header">
            <h3>Utilidades</h3>
        </header>
        <div class="row row-eq-height justify-content-center">
            @foreach ($links as $link)
            <div class="col-lg-3 mb-1">
                <div class="card wow bounceInUp">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $link->title}}</h5>
                        <a href="{{ $link->url }}" target="_black">
                            <img src="{{ url('storage/'.$link->image) }}" class="img-fluid" alt="">
                        </a> </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
