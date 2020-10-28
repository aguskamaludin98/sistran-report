@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h3 class="mb-2">Master Data Job Description</h3>
            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Finance Dashboard Template</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
 <div class="row">
    <!-- ============================================================== -->
    <!-- data table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Data Tables - Print, Excel, CSV, PDF Buttons</h5>
                <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p>
            </div>
            <div class="card-body">
              @if (session('alert'))
                  <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="fa fa-times"></i>
                      </button>
                      <span>{{ session('alert') }}</span>
                  </div>
              @elseif(session('success'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="fa fa-times"></i>
                      </button>
                      <span>{{ session('success') }}</span>
                  </div>
              @endif
              <a class="btn btn-primary" href="{{route('add-job_description')}}"><em class="fa fa-plus"></em> Add Job Description</a>
              <div class="table-responsive mt-2">
                  <table id="example" class="table table-striped table-bordered second" style="width:100%">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $i=1; foreach ($job_description as $job_descriptions):?>
                          <tr>
                              <td>{{$i}}</td>
                              <td>{{$job_descriptions->job_description_name}}</td>
                              <td>{{$job_descriptions->description}}</td>
                              <td class="td-actions text-right">
                                <a href="{{route('edit-job_description', $job_descriptions->id)}}" type="button" class="btn btn-primary btn-link btn-sm">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="{{route('destroy-job_description', $job_descriptions->id)}}" class="btn btn-danger btn-link btn-sm">
                                    <i class="fa fa-delete"></i>Delete
                                </a>
                              </td>
                          </tr>
                          <?php $i++; endforeach;?>
                      </tbody>
                  </table>
              </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end data table  -->
    <!-- ============================================================== -->
</div>
@endsection