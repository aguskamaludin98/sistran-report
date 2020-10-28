@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h3 class="mb-2">Master Data User</h3>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Master Data User</li>
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
                <h5 class="mb-0">Data Tables - Master Data User</h5>
                <p>This Datatable is used to manage Master Data User</p>
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
                                <div class="row">
                                    <div class="pull-left">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                         </button>
                                    </div>
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fas fa-tras"></i> Delete
                                        </button>
                                    </div>
                                </div>
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