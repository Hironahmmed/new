@extends('layouts.backend.admin.app')
@section('title','Freelancer')
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
                  <div class="head-label text-center"><h5 class="card-title mb-0">All Customer <span class="badge rounded-pill  bg-label-success">{{ $users->count() }}</span></h5></div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons"> 
                            <a href="{{ route('admin.customer.create') }}" class="dt-button create-new btn btn-primary"><span><i class="bx bx-plus me-sm-2"></i> <span class="d-none d-sm-inline-block">Add New Record</span></span></a>
                        </div>
                    </div>
                </div>
                <table class="datatables-basic table table-bordered dataTable no-footer dtr-column collapsed" style="width: 1031px;">
                  <thead>
                      <tr role="row">
                          <th class="sorting">ID</th>
                          <th class="sorting">email</th>
                          <th class="sorting">Card</th>
                          <th class="sorting">Plan</th>
                          <th class="sorting">Status</th>
                          <th class="sorting">Update</th>
                          <th class="sorting_disabled">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $key=>$user)

                      <tr class="odd">
                          <td>{{ $key + 1 }}</td>
                          <td>
                          {{ $user->email }}
                          </td>
                          <td>{{ $user->card_last_four }}</td>
                          <td>{{ $user->plan_name }}</td>
                          <td>
                                @if($user->status == true)
                                <a href="{{ route('admin.customer.status', ['user_id'=>$user->id, 'status'=>0 ])}}" class="btn btn-sm btn-label-danger"><i class="fa fa-ban" style="margin-right: 0.5rem;"></i>Diactive</a>
                                @else
                                <a href="{{ route('admin.customer.status', ['user_id'=>$user->id, 'status'=>1 ])}}" class="btn btn-sm btn-label-success"><i class="fa fa-check" style="margin-right: 0.5rem;"></i>Active</a>
                                @endif
                          </td>
                          <td>{{ $user->updated_at->diffForHumans() }}</td>
                          <td>
                              <a href="{{ route('admin.customer.edit', $user->id )}}" class="btn mr-2 btn-sm btn-icon btn-label-success"><i class="bx bxs-edit"></i></a>

                              <a href="{{ route('admin.customer.show', $user->id )}}" class="btn mr-2 btn-sm btn-icon btn-label-primary"><i class="bx bxs-show"></i></a>

                              <button type="button" class="btn btn-sm btn-icon btn-label-danger" onclick="deleteTag({{ $user->id }})">
                                  <span class="tf-icons bx bx-trash"></span>
                              </button>
                              <form id="delete-form-{{ $user->id }}" action="{{ route('admin.customer.destroy',$user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                              </form>
                          </td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
              
              <div class="row">
                  <div class="col-sm-12 col-md-6">
                      <div class="dataTables_info" >Here is total categorie entrys</div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                  {{ $users->links('vendor.pagination.bootstrap-4') }}
                  </div>
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