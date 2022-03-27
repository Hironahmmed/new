@extends('layouts.backend.admin.app')
@section('title','All Platform')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
          
          <!-- DataTable with Buttons -->
          <div class="card">
            <div class="card-datatable table-responsive pt-0">
              <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                
                <div class="card-header flex-column flex-md-row">
                  <div class="head-label text-center"><h5 class="card-title mb-0">All Platform <span class="badge rounded-pill  bg-label-success">{{ $platforms->count() }}</span></h5></div>
                      <div class="dt-action-buttons text-end pt-3 pt-md-0">
                          <div class="dt-buttons"> 
                              <a href="{{ route('admin.platform.create') }}" class="dt-button create-new btn btn-primary"><span><i class="bx bx-plus me-sm-2"></i> <span class="d-none d-sm-inline-block">Add New Record</span></span></a>
                          </div>
                    </div>
                </div>
                <table class="datatables-basic table table-bordered dataTable no-footer dtr-column collapsed" style="width: 1031px;">
                  <thead>
                      <tr role="row">
                          <th class="sorting" style="width: 30px;">ID</th>
                          <th class="sorting" style="width: 300px;">Name</th>
                          <th class="sorting" style="width: 250px;">Create Date</th>
                          <th class="sorting_disabled" style="width: 150px;">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($platforms as $key=>$platform)

                      <tr class="odd">
                          <td>{{ $key + 1 }}</td>
                          <td>
                              <div class="d-flex justify-content-start align-items-center">
                                  <div class="d-flex flex-column">
                                      <span class="emp_name text-truncate">{{ $platform->name }}</span>
                                  </div>
                              </div>
                          </td>
                          <td>{{ $platform->created_at->diffForHumans() }}</td>
                          <td>
                              <a href="{{ route('admin.platform.edit', $platform->id )}}" class="btn mr-2 btn-sm btn-icon btn-label-success"><i class="bx bxs-edit"></i></a>
                              
                              <button type="button" class="btn btn-sm btn-icon btn-label-danger" onclick="deleteTag({{ $platform->id }})">
                                  <span class="tf-icons bx bx-trash"></span>
                              </button>
                              <form id="delete-form-{{ $platform->id }}" action="{{ route('admin.platform.destroy',$platform->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                              </form>
                          </td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
              
              <div class="row">
              {{ $platforms->links('vendor.pagination.bootstrap-4') }}
              </div></div>
            </div>
          </div>
          
          <!--/ DataTable with Buttons -->
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
</script>
@endpush