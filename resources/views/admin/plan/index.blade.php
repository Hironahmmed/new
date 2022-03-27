@extends('layouts.backend.admin.app')
@section('title','All Term')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
            
            <div class="card-header flex-column flex-md-row">
                <div class="head-label text-center"><h5 class="card-title mb-0">All Plans <span class="badge rounded-pill  bg-label-success">{{ $data->count() }}</span></h5></div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                </div>
            </div>
            <table class="datatables-basic table table-bordered dataTable no-footer dtr-column collapsed" style="width: 1031px;">
                <thead>
                    <tr role="row">
                        <th class="sorting" style="width: 10px;">ID</th>
                        <th class="sorting" style="width: 300px;">Name</th>
                        <th class="sorting" style="width: 300px;">Product Code</th>
                        <th class="sorting" style="width: 150px;">Price</th>
                        <th class="sorting" style="width: 150px;">Discounted Price</th>
                        <th class="sorting" style="width: 150px;">Coupon</th>
                        <th class="sorting" style="width: 150px;">Percentage</th>
                        <th class="sorting_disabled" style="width: 250px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key=>$term)

                    <tr class="odd">
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center">
                                <div class="d-flex flex-column">
                                    <span class="emp_name text-truncate">{{ $term->name }}</span>
                                </div>
                            </div>
                        </td>
                        <td>{{ $term->product_code }}</td>
                        <td>{{ $term->price }}</td>
                        <td>{{ $term->discounted_price }}</td>
                        <td>{{ $term->coupon }}</td>
                        <td>{{ $term->percentage }}</td>
                        <td>
                            <a href="{{ route('admin.plan.edit', $term->id )}}" class="btn mr-2 btn-sm btn-icon btn-label-success"><i class="bx bxs-edit"></i></a>
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
@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
  <script type="text/javascript">
    function deleteTag(id){
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete is?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        event.preventDefault();
        document.getElementById('delete-form-'+id).submit();
      }
    })
    
  }

  function approve(id){
      Swal.fire({
      title: 'Want To Approve This?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Approve It!'
    }).then((result) => {
      if (result.isConfirmed) {
        event.preventDefault();
        document.getElementById('approve-form-'+id).submit();
      }
    })
    
  }
  </script>
@endpush