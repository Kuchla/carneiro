@csrf
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Formulário</h3>
    </div>
    <div class="box-body">

        <div class="row">
            <div class="form-group col-md-6 has-feedback {{ $errors->has('collaborator.name') ? 'has-error' : '' }}">
                <label for="collaborator_name">{{ trans('adminlte::adminlte.collaborator.name') }}</label>
                <input type="text" name="collaborator[name]" class="form-control" id="collaborator_name"
                    placeholder="{{ trans('adminlte::adminlte.collaborator.name') }}"
                    value="{{ old('collaborator.name', @$collaborator->name ) }}">
                @if ($errors->has('collaborator.name'))
                <span class="help-block">
                    <strong>{{ $errors->first('collaborator.name') }}</strong>
                </span>
                @endif
            </div>

            <div
                class="form-group col-md-6 has-feedback {{ $errors->has('collaborator.category') ? 'has-error' : '' }}">
                <label for="collaborator_category">{{ trans('adminlte::adminlte.collaborator.category') }}</label>
                <select class="form-control select2" name="collaborator[category]">
                    <option>Selecione</option>
                    @foreach ($categories as $key => $category)
                    <option value="{{ $key }}" @if ($key==old('collaborator.category', @$collaborator->category))
                        selected="selected"
                        @endif
                        >{{ $category }}</option>
                    @endforeach
                </select>
                @if ($errors->has('collaborator.category'))
                <span class="help-block">
                    <strong>{{ $errors->first('collaborator.category') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12 has-feedback {{ $errors->has('collaborator.image') ? 'has-error' : '' }}">
                <label for="collaborator_image">{{ trans('adminlte::adminlte.collaborator.image') }}</label>
                <input id="collaborator_image" type="file" class="file image-upload" data-preview-file-type="text"
                    name="collaborator[image]"
                    value="{{ @$collaborator->image ? @url('storage/'.@$collaborator->image) : '' }}" />
                @if ($errors->has('collaborator.image'))
                <span class="help-block">
                    <strong>{{ $errors->first('collaborator.image') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-9 has-feedback {{ $errors->has('collaborator.role') ? 'has-error' : '' }}">
                <label for="collaborator_role">{{ trans('adminlte::adminlte.collaborator.role') }}</label>
                <input type="text" name="collaborator[role]" class="form-control" id="collaborator_role"
                    placeholder="{{ trans('adminlte::adminlte.collaborator.role') }}"
                    value="{{ old('collaborator.role', @$collaborator->role ) }}">
                @if ($errors->has('collaborator.role'))
                <span class="help-block">
                    <strong>{{ $errors->first('collaborator.role') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group form-check-inline col-md-3 has-feedback">
                <label for="collaborator_image">{{ trans('adminlte::adminlte.collaborator.active') }}</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="collaborator[active]" type="checkbox" id="collaborator_active"
                        @if(old('collaborator.active', @$collaborator->active)) checked @endif>
                    <label class="form-check-label" for="inlineCheckbox1">Ativo</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">
                        {{ trans('adminlte::adminlte.btn.save') }}
                    </button>
                    <a class="btn btn-primary" href="{{ route('admin.collaborators.index') }}">
                        {{ trans('adminlte::adminlte.btn.cancel') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
