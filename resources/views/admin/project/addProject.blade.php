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
                <form action="{{route('create-project')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-form-label">Project Name</label>
                        <input id="name" type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Project Number</label>
                        <input id="name" type="text" name="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Project Location</label>
                        <input id="name" type="text" name="location" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection