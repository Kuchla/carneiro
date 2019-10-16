<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-name">Formulário</h3>
    </div>
    <div class="box-body">

        <div class="row">
            <div class="form-group col-md-4 has-feedback {{ $errors->has('user.name') ? 'has-error' : '' }}">
                <label for="user_name">{{ trans('adminlte::adminlte.user.name') }}</label>
                <input type="text" name="user[name]" class="form-control" id="user_name"
                    placeholder="{{ trans('adminlte::adminlte.user.name') }}"
                    value="{{ old('user.name', @$user->name ) }}">
                @if ($errors->has('user.name'))
                <span class="help-block">
                    <strong>{{ $errors->first('user.name') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group col-md-4 has-feedback {{ $errors->has('user.email') ? 'has-error' : '' }}">
                <label for="user_email">{{ trans('adminlte::adminlte.user.email') }}</label>
                <input type="text" name="user[email]" class="form-control" id="user_email"
                    placeholder="{{ trans('adminlte::adminlte.user.email') }}"
                    value="{{ old('user.email', @$user->email ) }}">
                @if ($errors->has('user.email'))
                <span class="help-block">
                    <strong>{{ $errors->first('user.email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group col-md-4 has-feedback {{ $errors->has('user.password') ? 'has-error' : '' }}">
                <label for="user_password">{{ trans('adminlte::adminlte.user.password') }}</label>
                <input type="text" name="user[password]" class="form-control" id="user_password"
                    placeholder="{{ trans('adminlte::adminlte.user.password') }}" value="{{ old('user.password')}}">
                @if ($errors->has('user.password'))
                <span class="help-block">
                    <strong>{{ $errors->first('user.password') }}</strong>
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
                    <a class="btn btn-primary" href="{{ route('admin.users.index') }}">
                        {{ trans('adminlte::adminlte.btn.cancel') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
