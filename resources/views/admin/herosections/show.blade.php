@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.herosection.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.herosections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.herosection.fields.id') }}
                        </th>
                        <td>
                            {{ $herosection->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.herosection.fields.hero_description') }}
                        </th>
                        <td>
                            {{ $herosection->hero_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.herosection.fields.description') }}
                        </th>
                        <td>
                            {{ $herosection->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.herosections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection