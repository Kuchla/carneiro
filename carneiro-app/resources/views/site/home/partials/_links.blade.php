<!--==========================
      Utilities Section
    ============================-->
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
              <i class="fa fa-link"></i>
            </a>

            <!-- <p class="card-text">Deleniti optio et nisi dolorem debitis. Aliquam nobis est temporibus sunt ab
                  inventore officiis aut voluptatibus.</p>
                <a href="#" class="readmore">Read more </a> -->
          </div>
        </div>
      </div>
      @endforeach

    </div>

    <!-- <div class="row counters">
  
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">274</span>
              <p>courses</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">421</span>
              <p>Projects</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">1,364</span>
              <p>Hours Of Support</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">18</span>
              <p>Hard Workers</p>
            </div>
    
          </div> -->

  </div>
</section>