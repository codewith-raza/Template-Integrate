@extends('layouts.admin')
@section('mainsection')
<!--main contents start-->
<main class="main-content">
        <!--page title start-->
    <div class="page-title">
        <div class="container-fluid p-0">
            <div class="row">
                    <div class="col-8">
                        <h4 class="mb-0"> Countries
                        </h4>
                        <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Home</a></li>
                            <li class="breadcrumb-item active">Country</li>
                        </ol>
                    </div>
                    <div class="col-4">
                        <div class="btn-group float-right ml-2">
                        <a class="btn btn-info" href="{{ route('countries.create') }}">Add</a> 
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!--page title end-->
@section('content')
@can('country_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('countries.create') }}">
            Add
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Country">
            <thead>
                <tr>
                    
                    <th>
                        ID
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                        Short Code
                    </th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
</main>
<!--main contents end-->
@endsection
@endsection

@push('scripts')
@parent
<script>
    dd(121);
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('country_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('countries.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('countries.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'position', name: 'position', visible: false, searchable: false },
{ data: 'name', name: 'name' },
{ data: 'short_code', name: 'short_code' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    order: [[ 2, 'asc' ]],
    pageLength: 100,
    rowReorder: {
        selector: 'tr td:not(:first-of-type,:last-of-type)',
        dataSrc: 'position'
    },
  };
  let datatable = $('.datatable-Country').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });

    datatable.on('row-reorder', function (e, details) {
        if(details.length) {
            let rows = [];
            details.forEach(element => {
                rows.push({
                    id: datatable.row(element.node).data().id,
                    position: element.newData
                });
            });

            $.ajax({
                headers: {'x-csrf-token': _token},
                method: 'POST',
                url: "{{ route('countries.reorder') }}",
                data: { rows }
            }).done(function () { datatable.ajax.reload() });
        }
    });
});

</script>
@endpush


@push('script')
<!-- Placed js at the end of the page so the pages load faster -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('assets/vendor/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('assets/vendor/lobicard/js/lobicard.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.scrollTo.min.js')}}"></script>

    <!--chartjs-->
    <script src="{{asset('assets/vendor/chartjs/Chart.min.js')}}"></script>
    <!--chartjs initialization-->
    <script src="{{asset('assets/vendor/index-chartjs-init.js')}}"></script>


    <!--custom chart-->
    <script src="{{asset('assets/vendor/custom-chart/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendor/custom-chart/underscore-min.js')}}"></script>
    <script src="{{asset('assets/vendor/custom-chart/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/custom-chart/accounting.min.js')}}"></script>
    <!--custom chart init-->
    <script src="{{asset('assets/vendor/custom-chart/custom-chart-init.js')}}"></script>


    <!--easy pie chart-->
    <script src="{{asset('assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-easy-pie-chart/easy-pie-chart-init.js')}}"></script>

    <!--vectormap-->
    <script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/vendor/vmap-init.js')}}"></script>


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    <script src="{{asset('assets/js/scripts.js')}}"></script>

@endpush
