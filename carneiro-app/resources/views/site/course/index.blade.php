@extends('site.layouts.app')

@section('title', 'Index')

@section('content')

<section id="show-pages">
    <div class="container">
        <header class="section-header">
            <h3>{{ $course->name}}</h3>
        </header>
        <div class="row">
            <div class="col-lg-2 wow fadeInUp">
                <img src="{{ url('storage/'.$course->logo) }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-10 wow fadeInUp pt-5 pt-lg-0">
                <h4>Duração: {{ $course->duration }} </h4>

                <h5 class="widget-user-desc">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#ExemploModalCentralizado">Ementa curso integrado
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#ExemploModalCentralizados">Ementa curso subsequente
                    </button>
                </h5>

                <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
                    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="TituloModalCentralizado">Arquivo PDF</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <embed src="{{ url('storage/'.@$course->schedules) }}" frameborder="0" width="100%"
                                    height="150px">
                            </div>
                        </div>
                    </div>
                </div>

                <p>
                    {!! $course->description !!}
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
