@extends('layouts.admin')
@section('content')
@can('herosection_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.herosections.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.herosection.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.herosection.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Footer">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.herosection.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.herosection.fields.hero_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.herosection.fields.description') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($herosections as $key => $herosection)
                        <tr data-entry-id="{{ $herosection->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $herosection->id ?? '' }}
                            </td>
                            <td>
                                {{ $herosection->hero_description ?? '' }}
                            </td>
                            <td>
                                {{ $herosection->description ?? '' }}
                            </td>
                            <td>
                                @can('herosection_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.herosections.show', $herosection->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('herosection_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.herosections.edit', $herosection->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('herosection_delete')
                                    <form action="{{ route('admin.herosections.destroy', $herosection->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('herosection_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.herosections.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Footer:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection