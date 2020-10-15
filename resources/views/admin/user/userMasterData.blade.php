@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h3 class="mb-2">Master Data Problem</h3>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Master Problem</li>
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
            <a class="btn btn-primary" href="{{route('add-user')}}"><em class="fa fa-plus"></em> Add Problem</a>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; foreach ($user as $users):?>
                          <tr>
                              <td>{{$i}}</td>
                              <td>{{$users->name}}</td>
                              <td>{{$users->email}}</td>
                              <td>{{$users->password}}</td>
                              <td>{{$users->role}}</td>
                              <td class="td-actions text-right">
                                <a href="" type="button" class="btn btn-primary btn-link btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-link btn-sm">
                                    <i class="fa fa-delete"></i>
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