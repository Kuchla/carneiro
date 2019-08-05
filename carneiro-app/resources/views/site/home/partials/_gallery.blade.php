<!--==========================
      Galery Section
    ============================-->
<section id="gallery" class="clearfix">
  <div class="container">

    <header class="section-header">
      <h3 class="section-title">Galeria</h3>
    </header>

    <div class="row">
      <div class="col-lg-12">
        <ul id="gallery-flters">
          <li lass="gallery-menu" id="gmt" onclick='clickfunc(this)' data-filter="Todas">Todas</li>
          @foreach ($categories as $category)
          <li class="gallery-menu" class="filter-active" id="gm" data-filter=".{{$category}}">{{ $category }}</li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="row gallery-container">
      @foreach ($galleries as $gallery)
      
      <div class="col-lg-4 col-md-6 gallery-item {{ $gallery->category }}">
        <div class="gallery-wrap">
          <img src="{{ url('storage/'.$gallery->image) }}" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4><a id="category" href="#">{{ $gallery->category }}</a></h4>
            <div>
              <a href="{{ url('storage/'.$gallery->image) }}" data-lightbox="gallery" data-title="{{ $gallery->description}}" class="link-preview"
                title="Visualizar"><i class="ion ion-eye"></i></a>
              <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    {{ $galleries->links() }}
    <!-- <center><strong><a href="#">Ver todas as fotos >></a></strong> </center> -->
  </div>
</section>
