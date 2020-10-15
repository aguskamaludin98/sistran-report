@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Basic Form Elements</h3>
            <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
        </div>
        <div class="card">
            <h5 class="card-header">Basic Form</h5>
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