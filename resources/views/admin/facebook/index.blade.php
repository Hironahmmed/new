@extends('layouts.backend.admin.app')
@section('title','All Facebook Ad')
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
                  <div class="head-label text-center"><h5 class="card-title mb-0">All Facebook Ad <span class="badge rounded-pill  bg-label-success">{{ $facebooks->count() }}</span></h5></div>
                      <div class="dt-action-buttons text-end pt-3 pt-md-0">
                          <div class="dt-buttons"> 
                              <a href="{{ route('admin.facebook.create') }}" class="dt-button create-new btn btn-primary"><span><i class="bx bx-plus me-sm-2"></i> <span class="d-none d-sm-inline-block">Add New Record</span></span></a>
                          </div>
                    </div>
                </div>
                <table class="datatables-basic table table-bordered dataTable no-footer dtr-column collapsed" style="width: 1031px;">
                  <thead>
                      <tr role="row">
                          <th class="sorting" style="width: 10px;">ID</th>
                          <th class="sorting" style="width: 300px;">Name</th>
                          <th class="sorting" style="width: auto;">Freelancer</th>
                          <th class="sorting" style="width: auto;">Approve</th>
                          <th class="sorting" style="width: 250px;">Create</th>
                          <th class="sorting" style="width: 200px;">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($facebooks as $key=>$facebook)

                      <tr class="odd">
                          <td>{{ $key + 1 }}</td>
                          <td>{{ str_limit($facebook->title,'20') }}</td>
                          <td>{{ $facebook->user->name }}</td>
                          <td>
                              @if($facebook->is_approved == true)
                              <span class="badge rounded-pill  bg-label-success">Approved</span>
                              @else
                              <span class="badge rounded-pill  bg-label-danger">Pending</span>
                              @endif
                          </td>
                          <td>{{ $facebook->created_at->diffForHumans() }}</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-icon btn-label-success" onclick="approve({{ $facebook->id }})">
                                  <span class="tf-icons bx bx-check"></span>
                              </button>
                              <a href="{{ route('admin.facebook.edit', $facebook->id )}}" class="btn mr-2 btn-sm btn-icon btn-label-success"><i class="bx bxs-edit"></i></a>

                              <a href="{{ route('admin.facebook.show', $facebook->id )}}" class="btn mr-2 btn-sm btn-icon btn-label-primary"><i class="bx bxs-show"></i></a>
                              <button type="button" class="btn btn-sm btn-icon btn-label-danger" onclick="deleteTag({{ $facebook->id }})">
                                  <span class="tf-icons bx bx-trash"></span>
                              </button>
                              
                              <form id="delete-form-{{ $facebook->id }}" action="{{ route('admin.facebook.destroy',$facebook->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                              </form>
                              <form id="approve-form-{{ $facebook->id }}" action="{{ route('admin.facebook.approve',$facebook->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                              </form>
                          </td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
              
              <div class="row">
              {{ $facebooks->links('vendor.pagination.bootstrap-4') }}
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