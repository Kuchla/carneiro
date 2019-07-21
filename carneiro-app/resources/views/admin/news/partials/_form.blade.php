<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulário</h3>
    </div>
    <div class="box-body">

        <div class="row">
            <div class="form-group col-md-6 has-feedback {{ $errors->has('news.title') ? 'has-error' : '' }}">
                <label for="news_title">{{ trans('adminlte::adminlte.news.title') }}</label>
                <input type="text" name="news[title]" class="form-control" id="news_title"
                    placeholder="{{ trans('adminlte::adminlte.news.title') }}"
                    value="{{ old('news.title', @$news->title ) }}">
                @if ($errors->has('news.title'))
                <span class="help-block">
                    <strong>{{ $errors->first('news.title') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group col-md-6 has-feedback {{ $errors->has('news.category') ? 'has-error' : '' }}">
                <label for="news_category">{{ trans('adminlte::adminlte.news.category') }}</label>
                <select class="form-control select2" name="news[category]">
                    <option>Selecione</option>
                    @foreach ($categories as $key => $category)
                    <option value="{{ $key }}" @if ($key==old('news.category', @$news->category))
                        selected="selected"
                        @endif
                        >{{ $category }}</option>
                    @endforeach
                </select>
                @if ($errors->has('news.category'))
                <span class="help-block">
                    <strong>{{ $errors->first('news.category') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 has-feedback {{ $errors->has('news.image') ? 'has-error' : '' }}">
                <label for="news_image">{{ trans('adminlte::adminlte.news.image') }}</label>
                @isset($news->image)
                <p>
                    <img src="{{ url('storage/'.@$news->image) }}" alt="" style="max-width: 200px;">
                </p>
                @endisset
                <input type="file" name="news[image]" class="custom-file-input" id="news_image"
                    aria-describedby="image">
                <label class="custom-file-label" for="image">Arquivos: JPG e PNG.</label>
                @if ($errors->has('news.image'))
                <span class="help-block">
                    <strong>{{ $errors->first('news.image') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12 has-feedback {{ $errors->has('news.description') ? 'has-error' : '' }}">
                <label for="news_description">{{ trans('adminlte::adminlte.news.description') }}</label>
                <textarea id="news_description" name="news[description]">
                    {{ old('news.description', @$news->description) }}
                </textarea>
                @if ($errors->has('news.description'))
                <span class="help-block">
                    <strong>{{ $errors->first('news.description') }}</strong>
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
                    <a class="btn btn-primary" href="{{ route('admin.news.index') }}">
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
        $("#news_description").summernote({
            lang: "pt-BR",
        });
    });

</script>