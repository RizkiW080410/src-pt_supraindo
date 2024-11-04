@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.vision.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.visions.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="visi">{{ trans('cruds.vision.fields.visi') }}</label>
                <input class="form-control {{ $errors->has('visi') ? 'is-invalid' : '' }}" type="text" name="visi" id="visi" value="{{ old('visi', '') }}">
                @if($errors->has('visi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('visi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.vision.fields.visi_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection