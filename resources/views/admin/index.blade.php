@extends('layout.admin')

@section('title', 'APK List')

@section('section-headers')
  asdasd
@endsection
@section('section-body')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>List APK</h4>
          <div class="card-header-action">
            <a href={{ route('apk.add') }}#" class="btn btn-primary keychainify-checked">
              ADD APK
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-list-apk">
              <thead>
                <tr>
                  <th class="text-center">
                    #
                  </th>
                  <th>ICON</th>
                  <th>APK NAME</th>
                  <th>PACKAGE NAME</th>
                  <th>RELEASE</th>
                  <th>STATUS</th>
                  <th>ADS TYPE</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($apklist as $key => $item)
                  <tr>
                    <td>
                      {{ $key + 1 }}
                    </td>
                    <td class="text-center">
                      <img alt="image" src="{{ $item->apk_icon }}" class="rounded-circle" width="35"
                        data-toggle="tooltip">
                    </td>
                    <td>{{ $item->apk_name }}</td>
                    <td class="align-middle">
                      {{ $item->apk_package }}
                    </td>
                    <td>
                      {{ $item->created_at }}
                    </td>
                    <td>
                      <div class="badge badge-{{ $item->apk_status === 'active' ? 'success' : 'danger' }}">
                        {{ $item->apk_status }}</div>
                    </td>
                    <td>{{ $item->ads_type }}</td>
                    <td class="text-center">
                      <a href="#" class="btn btn-primary btn-sm">Detail</a>
                      <a href="{{ route('apk.edit', ['id' => $item->id]) }}" class="btn btn-info btn-sm">Edit</a>
                      <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection



@push('css')
  <link rel="stylesheet" href="/assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
@endpush

@push('js')
  <script src="/assets/modules/datatables/datatables.min.js"></script>
  <script src="/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="/assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $("#table-list-apk").dataTable({
      "columnDefs": [{
        "sortable": true,
        "targets": [2, 3]
      }]
    });
  </script>

@endpush
