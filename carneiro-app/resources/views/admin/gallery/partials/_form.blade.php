@csrf
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulário</h3>
    </div>
    <div class="box-body">

        <div class="row">
            <div class="form-group col-md-6 has-feedback {{ $errors->has('gallery.description') ? 'has-error' : '' }}">
                <label for="gallery_description">{{ trans('adminlte::adminlte.gallery.description') }}</label>
                <input type="text" name="gallery[description]" class="form-control" id="gallery_description"
                    placeholder="{{ trans('adminlte::adminlte.gallery.description') }}"
                    value="{{ old('gallery.description', @$gallery->description ) }}">
                @if ($errors->has('gallery.description'))
                <span class="help-block">
                    <strong>{{ $errors->first('gallery.description') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group col-md-6 has-feedback {{ $errors->has('gallery.category') ? 'has-error' : '' }}">
                <label for="gallery_category">{{ trans('adminlte::adminlte.gallery.category') }}</label>
                <select class="form-control select2" name="gallery[category]">
                    <option>Selecione</option>
                    @foreach ($categories as $key => $category)
                    <option value="{{ $key }}" @if ($key==old('gallery.category', @$gallery->category))
                        selected="selected"
                        @endif
                        >{{ $category }}</option>
                    @endforeach
                </select>
                @if ($errors->has('gallery.category'))
                <span class="help-block">
                    <strong>{{ $errors->first('gallery.category') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 has-feedback {{ $errors->has('gallery.image') ? 'has-error' : '' }}">
                <label for="gallery_image">{{ trans('adminlte::adminlte.gallery.image') }}</label>
                @isset($gallery->image)
                <p>
                    <img src="{{ url('storage/'.@$gallery->image) }}" alt="" style="max-width: 200px;">
                </p>
                @endisset
                <input type="file" name="gallery[image]" class="custom-file-input" id="gallery_image"
                    aria-describedby="logo" value="fdsf">
                <label class="custom-file-label" for="logo">Arquivos: JPG e PNG.</label>
                @if ($errors->has('gallery.image'))
                <span class="help-block">
                    <strong>{{ $errors->first('gallery.image') }}</strong>
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
                    <a class="btn btn-primary" href="{{ route('admin.galleries.index') }}">
                        {{ trans('adminlte::adminlte.btn.cancel') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

</script>