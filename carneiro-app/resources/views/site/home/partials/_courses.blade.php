<!--==========================
      Courses Section
    ============================-->
<section id="courses" class="section-bg">
    <div class="container">
        <div class="section-header">
            <h3>Cursos Técnicos</h3>
        </div>

        <div class="row no-gutters courses-wrap clearfix wow fadeInUp">
            @foreach ($courses as $course)
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <a href="">
                        <img src="{{ url('storage/'.$course->logo) }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>