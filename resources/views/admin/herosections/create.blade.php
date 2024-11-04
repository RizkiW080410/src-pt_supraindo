@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.herosection.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.herosections.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="hero_description">{{ trans('cruds.herosection.fields.hero_description') }}</label>
                <input class="form-control {{ $errors->has('hero_description') ? 'is-invalid' : '' }}" type="text" name="hero_description" id="hero_description" value="{{ old('hero_description', '') }}">
                @if($errors->has('hero_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hero_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.herosection.fields.hero_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.herosection.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.herosection.fields.description_helper') }}</span>
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