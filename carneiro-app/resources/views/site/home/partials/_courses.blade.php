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
            <div class="">
                <div class="client-logo">
                    <a href="{{ route('site.courses.show', $course->id) }}">
                        <img src="{{ url('storage/'.$course->logo) }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>