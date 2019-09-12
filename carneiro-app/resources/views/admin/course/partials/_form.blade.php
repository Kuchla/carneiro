@csrf
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulário</h3>
    </div>
    <div class="box-body">

        <div class="row">
            <div class="form-group col-md-6 has-feedback {{ $errors->has('course.name') ? 'has-error' : '' }}">
                <label for="course_name">{{ trans('adminlte::adminlte.course.name') }}</label>
                <input type="text" name="course[name]" class="form-control" id="course_name"
                    placeholder="{{ trans('adminlte::adminlte.course.name') }}"
                    value="{{ old('course.name', @$course->name ) }}">
                @if ($errors->has('course.name'))
                <span class="help-block">
                    <strong>{{ $errors->first('course.name') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group col-md-6 has-feedback {{ $errors->has('course.duration') ? 'has-error' : '' }}">
                <label for="course_duration">{{ trans('adminlte::adminlte.course.duration') }}</label>
                <input type="text" name="course[duration]" class="form-control" id="course_duration"
                    placeholder="{{ trans('adminlte::adminlte.course.duration') }}"
                    value="{{ old('course.duration', @$course->duration ) }}">
                @if ($errors->has('course.duration'))
                <span class="help-block">
                    <strong>{{ $errors->first('course.duration') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 has-feedback {{ $errors->has('course.logo') ? 'has-error' : '' }}">
                <label for="course_logo">{{ trans('adminlte::adminlte.course.logo') }}</label>

                <p>
                    <img id="show_img" src="{{ @url('storage/'.$course->logo) }}" alt="" style="max-width: 200px;">
                </p>
                <input type="file" name="course[logo]" onchange="readURL(this);" class="custom-file-input"
                    id="course_logo" aria-describedby="logo" value="{{ @url('storage/'.$course->logo) }}"
                    >
                <label class="custom-file-label" for="logo">Arquivos: JPG e PNG.</label>
                @if ($errors->has('course.logo'))
                <span class="help-block">
                    <strong>{{ $errors->first('course.logo') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group col-md-6 has-feedback {{ $errors->has('course.schedules') ? 'has-error' : '' }}">
                <label for="course_schedules">{{ trans('adminlte::adminlte.course.schedules') }}</label>
                @isset($course->schedules)
                <p>
                    <button type="button" class="btn btn-secondary" data-toggle="modal"
                        data-target="#ExemploModalCentralizado">Conteúdo do curso
                    </button>
                </p>
                @endisset
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

                <input type="file" name="course[schedules]" class="custom-file-input" id="course_schedules"
                    aria-describedby="schedules">


                <label class="custom-file-label" for="inputGroupFile01">Arquivo: PDF.</label>

                @if ($errors->has('course.schedules'))
                <span class="help-block">
                    <strong>{{ $errors->first('course.schedules') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12 has-feedback {{ $errors->has('course.description') ? 'has-error' : '' }}">
                <label for="course_description">{{ trans('adminlte::adminlte.course.description') }}</label>
                <textarea id="course_description" name="course[description]">
                    {{ old('course.description', @$course->description) }}
                </textarea>
                @if ($errors->has('course.description'))
                <span class="help-block">
                    <strong>{{ $errors->first('course.description') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">
                        {{ trans('adminlte::adminlte.btn.save') }}
                    </button>
                    <a class="btn btn-primary" href="{{ route('admin.courses.index') }}">
                        {{ trans('adminlte::adminlte.btn.cancel') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

<script>
    $(document).ready(function () {
        $("#course_description").summernote({
            lang: "pt-BR",
        });
    });

</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
           
            reader.onload = function (e) {
                $('#show_img')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>