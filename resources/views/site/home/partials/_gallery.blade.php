<section id="gallery" class="clearfix">
    <div class="container">
        <header class="section-header">
            <h3 class="section-title">Galeria</h3>
        </header>
        {{-- <div class="row">
            <div class="col-lg-12">
                <div id="gallery-flters">
                    <strong>Fotos recentes</strong></li>
                </div>
            </div>
        </div> --}}
        <div class="row gallery-container">
            @foreach ($images as $image)
            <div class="col-lg-4 col-md-6 gallery-item {{ $image->gallery->category }}">
                <div class="gallery-wrap">
                    <img src="{{ url('storage/'.$image->name) }}" class="img-fluid" alt="">
                    <div class="gallery-info">
                        <h4><a id="category">{{ translate_category($image->category) }}</a></h4>
                        <div class="mb-4">
                            <a href="{{ url('storage/'.$image->name) }}" data-lightbox="gallery"
                                data-title="{{ $image->gallery->description}}" class="link-preview"
                                title="Visualizar"><i class="ion ion-eye"></i></a>
                        </div>
                        <small><a style="color:aliceblue" id="category">{{ $image->gallery->referent }}</a></small>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row text-center" ></div>
    <center>
        <strong><a href="{{ route('site.gallery.index')}}">Ver todas as fotos</a></strong>
    </center>
</section>
