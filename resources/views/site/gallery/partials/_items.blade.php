<div class="row show-gallery-container">
    @foreach ($galleries as $gallery)

    @foreach ($gallery->images as $image)

    <div class="col-lg-4 col-md-6 show-gallery-item {{ $gallery->category }}">
        <div class="show-gallery-wrap">
            <img src="{{ url('storage/'.$image->name) }}" class="img-fluid" alt="">
            <div class="show-gallery-info">
                <h4><a id="category">{{ translate_category($gallery->category) }}</a></h4>
                <div class="mb-4">
                    <a href="{{ url('storage/'.$image->name) }}" data-lightbox="show-gallery"
                        data-title="{{ $gallery->description}}" class="link-preview" title="Visualizar"><i
                            class="ion ion-eye"></i></a>
                </div>
                <small><a style="color:aliceblue" id="category">{{ $gallery->referent }}</a></small>

            </div>
        </div>
    </div>
    @endforeach
    @endforeach
    {{ $galleries->links() }}

</div>
