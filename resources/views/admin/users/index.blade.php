@extends('admin.layouts.base')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Basic Tables </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Basic Table</h4>
            </p>
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="dataTable">

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
@endsection

@push('js_after')
<script>
  $(function () {
      $('#dataTable').DataTable({
          serverSide: true,
          processing: true,
          searchDelay: 1000,
          ajax: '{{ route('user.data') }}',
          columns: [
              {data: 'name', title:'name'},
              {data: 'action', orderable: false, searchable: false}
          ]
      });
  });
</script>
@endpush