@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Add User Form</h3>
            <p>This form is used to add new user</p>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{route('create-user')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name</label>
                        <input id="name" type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Email</label>
                        <input id="name" type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Password</label>
                        <input id="name" type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Role</label>
                        <input id="name" type="text" name="role" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection