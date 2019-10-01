<section id="why-us" class="wow fadeIn">
    <div class="container">
        <header class="section-header">
            <h3>Utilidades</h3>
        </header>
        <div class="row row-eq-height justify-content-center">
            @foreach ($links as $link)
            <div class="col-lg-4 mb-4">
                <div class="card wow bounceInUp">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $link->title}}</h5>
                        <a href="{{ $link->url }}" target="_black">
                        <img src="{{ url('storage/'.$link->image) }}" style="max-width: 100px; max-height: 100px;" class="img-fluid" alt="">
                    </a>                        </a>
                        <!-- <p class="card-text">Deleniti optio et nisi dolorem debitis. Aliquam nobis est temporibus sunt ab
                  inventore officiis aut voluptatibus.</p>
                <a href="#" class="readmore">Read more </a> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
