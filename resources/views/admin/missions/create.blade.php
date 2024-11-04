@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.mission.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.missions.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="misi">{{ trans('cruds.mission.fields.misi') }}</label>
                <input class="form-control {{ $errors->has('misi') ? 'is-invalid' : '' }}" type="text" name="misi" id="misi" value="{{ old('misi', '') }}">
                @if($errors->has('misi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('misi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.mission.fields.misi_helper') }}</span>
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