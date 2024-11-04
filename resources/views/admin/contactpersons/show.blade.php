@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contactperson.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contactpersons.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contactperson.fields.id') }}
                        </th>
                        <td>
                            {{ $contactperson->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactperson.fields.name') }}
                        </th>
                        <td>
                            {{ $contactperson->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactperson.fields.fullname') }}
                        </th>
                        <td>
                            {{ $contactperson->fullname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactperson.fields.address') }}
                        </th>
                        <td>
                            {{ $contactperson->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactperson.fields.phone') }}
                        </th>
                        <td>
                            {{ $contactperson->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactperson.fields.email') }}
                        </th>
                        <td>
                            {{ $contactperson->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactperson.fields.description') }}
                        </th>
                        <td>
                            {!! $contactperson->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactperson.fields.image') }}
                        </th>
                        <td>
                            @if($contactperson->image)
                                <a href="{{ $contactperson->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $contactperson->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactperson.fields.faximile') }}
                        </th>
                        <td>
                            {{ $contactperson->faximile }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contactpersons.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection