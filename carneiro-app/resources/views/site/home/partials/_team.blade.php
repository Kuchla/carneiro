<!--==========================
      Team Section
    ============================-->
<section id="team">
  <div class="container">
    <div class="section-header">
      <h3>Direção</h3>
    </div>

    <div class="row team-wrap">

      @foreach ($collaborators as $collaborator)
      <div class="col-lg-3 col-md-6 wow fadeInUp">
        <div class="member">
          <img src="{{ url('storage/'.$collaborator->image) }}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>{{ $collaborator->name }}</h4>
              <span>{{ $collaborator->role }}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>

  </div>

</section>