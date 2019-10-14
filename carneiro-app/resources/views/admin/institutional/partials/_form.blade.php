@csrf
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulário</h3>
    </div>
    <div class="box-body">

        <div class="row">
            <div class="form-group col-md-12 has-feedback {{ $errors->has('institutional.title') ? 'has-error' : '' }}">
                <label for="institutional_title">{{ trans('adminlte::adminlte.institutional.title') }}</label>
                <input type="text" name="institutional[title]" class="form-control" id="institutional_title"
                    placeholder="{{ trans('adminlte::adminlte.institutional.title') }}"
                    value="{{ old('institutional.title', @$institutional->title) }}">
                @if ($errors->has('institutional.title'))
                <span class="help-block">
                    <strong>{{ $errors->first('institutional.title') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12 has-feedback {{ $errors->has('institutional.about') ? 'has-error' : '' }}">
                <label for="institutional_about">{{ trans('adminlte::adminlte.institutional.about') }}</label>
                <textarea id="institutional_about" name="institutional[about]" class="summernote">
                    {{ old('institutional.about', @$institutional->about) }}
                </textarea>
                @if ($errors->has('institutional.about'))
                <span class="help-block">
                    <strong>{{ $errors->first('institutional.about') }}</strong>
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
                    <a class="btn btn-primary" href="{{ route('admin.institutionals.index') }}">
                        {{ trans('adminlte::adminlte.btn.cancel') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
