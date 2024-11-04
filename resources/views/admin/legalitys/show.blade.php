@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.legality.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.legalitys.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.legality.fields.id') }}
                        </th>
                        <td>
                            {{ $legality->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.legality.fields.name') }}
                        </th>
                        <td>
                            {{ $legality->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.legality.fields.image') }}
                        </th>
                        <td>
                            @if($legality->image)
                                <a href="{{ $legality->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $legality->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.legalitys.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection