<div class="row show-gallery-container">
    @forelse ($images as $image)
    <div class="col-lg-4 col-md-6 show-gallery-item {{ $image->category }}">
        <div class="show-gallery-wrap"> <img src="{{ url('storage/'.$image->name) }}" class="img-fluid" alt="">
            <div class="show-gallery-info">
                <h4><a id="category">{{ translate_category($image->category) }}</a></h4>
                <div class="mb-4">
                    <a href="{{ url('storage/'.$image->name) }}" data-lightbox="show-gallery" data-title=""
                        class="link-preview" title="Visualizar"><i class="ion ion-eye"></i></a>
                </div>
                <small><a style="color:aliceblue" id="category">{{ $image->referent }}</a></small>
            </div>
        </div>
    </div>
    @empty
    <div class="col-md-12">
        <p>
            <h4>Nenhum álbum encontrado com os termos de busca selecionados!</h4>
        </p>
    </div>
    @endforelse
</div>
