@extends('layouts.master')
@push('up')
<!-- Page plugins -->
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
@endpush
@section('header')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">{{ $page_title }}</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">{{ $page_title }}</h3>
        @if(Session::has('message'))
        <div class="alert alert-{{ Session::get('message_type') }} alert-dismissible fade show mt-3" role="alert">
          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
          <span class="alert-text"><strong>{{ ucwords(Session::get('message_type')) }}!</strong> {{ Session::get('message') }}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>#ID</th>
              <th>Time</th>
              <th>User</th>
              <th>Payment Method</th>
              <th>Nominal</th>
              <th>For Month</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#ID</th>
              <th>Time</th>
              <th>User</th>
              <th>Payment Method</th>
              <th>Nominal</th>
              <th>For Month</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($data as $d)
            <tr>
              <td>{{ $d->id }}</td>
              <td>{{ Carbon\Carbon::parse($d->created_at)->format('j F Y H:i') }}</td>
              <td>{{ $d->user->name }}</td>
              <td>{{ $d->payment_method }}</td>
              <td>Rp{{ number_format($d->amount, 2) }}</td>
              <td>{{ $d->for_month }}</td>
              <td>{{ $d->description }}</td>
              <td>
                <a href="javascript:void(0)" onclick="approve({{ $d->id }})" class="btn btn-sm btn-info text-white"><i class="ni ni-box-2" title="Approve"></i></a>
                <a href="javascript:void(0)" onclick="reject({{ $d->id }})" class="btn btn-sm btn-danger text-white"><i class="ni ni-box-2" title="Reject"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
@push('bottom')
<!-- Optional JS -->
<script src="{{ asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>

<script type="text/javascript">
  function approve(id){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, approve it!'
    }).then((result) => {
      if (result.value) {
        window.location.href = "{{ url('admin/invoice/approve/')}}/"+id;
      }
    })
  }

  function reject(id){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, reject it!'
    }).then((result) => {
      if (result.value) {
        window.location.href = "{{ url('admin/invoice/reject/')}}/"+id;
      }
    })
  }
</script>
@endpush
