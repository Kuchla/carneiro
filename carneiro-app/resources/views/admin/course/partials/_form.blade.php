@csrf
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulário</h3>
    </div>
    <div class="box-body">

        <div class="row">
            <div class="form-group col-md-6 has-feedback {{ $errors->has('course.name') ? 'has-error' : '' }}">
                <label for="course_name">{{ trans('adminlte::adminlte.course.name') }}</label>
                <input type="text" name="course[name]" class="form-control" id="course_name" placeholder="{{ trans('adminlte::adminlte.course.name') }}" value="{{ old('course.name', @$course->name ) }}">
                @if ($errors->has('course.name'))
                <span class="help-block">
                    <strong>{{ $errors->first('course.name') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group col-md-6 has-feedback {{ $errors->has('course.duration') ? 'has-error' : '' }}">
                <label for="course_duration">{{ trans('adminlte::adminlte.course.duration') }}</label>
                <input type="text" name="course[duration]" class="form-control" id="course_duration" placeholder="{{ trans('adminlte::adminlte.course.duration') }}" value="{{ old('course.duration', @$course->duration ) }}">
                @if ($errors->has('course.duration'))
                <span class="help-block">
                    <strong>{{ $errors->first('course.duration') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12 has-feedback {{ $errors->has('course.logo') ? 'has-error' : '' }}">
                <label for="course_logo">{{ trans('adminlte::adminlte.course.logo') }}</label>
                <input id="course_logo" type="file" class="file" data-preview-file-type="text" name="course[logo]" value="{{ @$course->logo ? @url('storage/'.@$course->logo) : '' }}" />
                @if ($errors->has('course.logo'))
                <span class="help-block">
                    <strong>{{ $errors->first('course.logo') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 has-feedback {{ $errors->has('course.schedule_integrated') ? 'has-error' : '' }}">
                <label for="course_schedule_integrated">{{ trans('adminlte::adminlte.course.schedule_integrated') }}</label>
                <input id="course_schedule_integrated" type="file" class="file input-file" data-preview-file-type="pdf" name="course[schedule_integrated]" value="{{ @$course->schedule_integrated ? @url('storage/'.@$course->schedule_integrated) : '' }}" />
                @if ($errors->has('course.schedule_integrated'))
                <span class="help-block">
                    <strong>{{ $errors->first('course.schedule_integrated') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group col-md-6 has-feedback {{ $errors->has('course.schedule_subsequent') ? 'has-error' : '' }}">
                <label for="course_schedule_subsequent">{{ trans('adminlte::adminlte.course.schedule_subsequent') }}</label>
                <input id="course_schedule_subsequent" type="file" class="file input-file" data-preview-file-type="text" name="course[schedule_subsequent]" value="{{ @$course->schedule_subsequent ? @url('storage/'.@$course->schedule_subsequent) : '' }}" />
                @if ($errors->has('course.schedule_subsequent'))
                <span class="help-block">
                    <strong>{{ $errors->first('course.schedule_subsequent') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12 has-feedback {{ $errors->has('course.description') ? 'has-error' : '' }}">
                <label for="course_description">{{ trans('adminlte::adminlte.course.description') }}</label>
                <textarea id="summernote" name="course[description]" class="summernote">
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
