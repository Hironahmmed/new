@extends('layouts.admin.app')
@section('title','All Post')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
          
          <!-- DataTable with Buttons -->
          <div class="card">
            <div class="card-datatable table-responsive pt-0">
              <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                
                <div class="card-header flex-column flex-md-row">
                  <div class="head-label text-center"><h5 class="card-title mb-0">All Post <span class="badge rounded-pill  bg-label-success">{{ $posts->count() }}</span></h5></div>
                      
                </div>
                <table class="datatables-basic table table-bordered dataTable no-footer dtr-column collapsed" style="width: 1031px;">
                  <thead>
                      <tr role="row">
                          <th class="sorting" style="width: 10px;">ID</th>
                          <th class="sorting" style="width: 300px;">Title</th>
                          <th class="sorting" style="width: 50px;">Author</th>
                          <th class="sorting" style="width: auto;">View</th>
                          <th class="sorting" style="width: auto;">Approve</th>
                          <th class="sorting" style="width: auto;">Status</th>
                          <th class="sorting" style="width: 150px;">Create</th>
                          <th class="sorting_disabled" style="width: 250px;">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($posts as $key=>$post)

                      <tr class="odd">
                          <td>{{ $key + 1 }}</td>
                          <td>
                              <div class="d-flex justify-content-start align-items-center">
                                  <div class="d-flex flex-column">
                                      <span class="emp_name text-truncate">{{ str_limit($post->title,'30') }}</span>
                                  </div>
                              </div>
                          </td>
                          <td>
                              <div class="d-flex justify-content-start align-items-center">
                                  <div class="d-flex flex-column">
                                      <span class="emp_name text-truncate">{{ $post->user->name }}</span>
                                  </div>
                              </div>
                          </td>
                          <td>{{ $post->view_count }}</td>
                          <td>
                              @if($post->is_approved == true)
                              <span class="badge rounded-pill  bg-label-success">Approved</span>
                              @else
                              <span class="badge rounded-pill  bg-label-danger">Pending</span>
                              @endif
                          </td>
                          <td>
                              @if($post->status == true)
                              <span class="badge rounded-pill  bg-label-success">Published</span>
                              @else
                              <span class="badge rounded-pill  bg-label-danger">Pending</span>
                              @endif
                          </td>
                          <td>{{ $post->created_at->diffForHumans() }}</td>
                          <td>
                              <a href="{{ route('admin.post.edit', $post->id )}}" class="btn mr-2 btn-sm btn-icon btn-label-success"><i class="bx bxs-edit"></i></a>

                              <a href="{{ route('admin.post.show', $post->id )}}" class="btn mr-2 btn-sm btn-icon btn-label-primary"><i class="bx bxs-show"></i></a>
                              
                              <button type="button" class="btn btn-sm btn-icon btn-label-danger" onclick="deleteTag({{ $post->id }})">
                                  <span class="tf-icons bx bx-trash"></span>
                              </button>
                              <form id="delete-form-{{ $post->id }}" action="{{ route('admin.post.destroy',$post->id) }}" method="POST">
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
                      <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                          <ul class="pagination">
                              <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                              <li class="paginate_button page-item "><a href="#" class="page-link">2</a></li>
                              <li class="paginate_button page-item "><a href="#" class="page-link">3</a></li>
                              <li class="paginate_button page-item "><a href="#" class="page-link">4</a></li>
                              <li class="paginate_button page-item next"><a href="#" class="page-link">Next</a></li>
                          </ul>
                      </div>
                  </div>
              </div></div>
            </div>
          </div>
          
          <!--/ DataTable with Buttons -->
      </div>
      @endsection