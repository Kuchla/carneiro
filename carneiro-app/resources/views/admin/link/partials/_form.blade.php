<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulário</h3>
    </div>
    <div class="box-body">

        <div class="row">
            <div class="form-group col-md-6 has-feedback {{ $errors->has('link.title') ? 'has-error' : '' }}">
                <label for="link_title">{{ trans('adminlte::adminlte.link.title') }}</label>
                <input type="text" name="link[title]" class="form-control" id="link_title"
                    placeholder="{{ trans('adminlte::adminlte.link.title') }}"
                    value="{{ old('link.title', @$link->title ) }}">
                @if ($errors->has('link.title'))
                <span class="help-block">
                    <strong>{{ $errors->first('link.title') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group col-md-6 has-feedback {{ $errors->has('link.url') ? 'has-error' : '' }}">
                <label for="link_url">{{ trans('adminlte::adminlte.link.url') }}</label>
                <input type="text" name="link[url]" class="form-control" id="link_url"
                    placeholder="{{ trans('adminlte::adminlte.link.url') }}"
                    value="{{ old('link.url', @$link->url ) }}">
                @if ($errors->has('link.url'))
                <span class="help-block">
                    <strong>{{ $errors->first('link.url') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12 has-feedback {{ $errors->has('link.image') ? 'has-error' : '' }}">
                <label for="link_image">{{ trans('adminlte::adminlte.link.image') }}</label>
                <input id="link_image" type="file" class="file" data-preview-file-type="text" name="link[image]" value="{{ @$link->image ? @url('storage/'.@$link->image) : '' }}" />
                @if ($errors->has('link.image'))
                <span class="help-block">
                    <strong>{{ $errors->first('link.image') }}</strong>
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
                    <a class="btn btn-primary" href="{{ route('admin.links.index') }}">
                        {{ trans('adminlte::adminlte.btn.cancel') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

