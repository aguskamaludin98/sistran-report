@extends('layouts.main')
@section('content')
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="section-block" id="basicform">
          <h3 class="section-title">Basic Form Elements</h3>
          <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
      </div>
      <div class="card">
          <h5 class="card-header">Edit</h5>
          <div class="card-body">
              <form method="POST" action="{{route('create-job_description')}}">
                {{ csrf_field() }}
                  <div class="form-group">
                      <label for="name" class="col-form-label">Job Description Name</label>
                      <input id="name" type="text" name="name" class="form-control" value="{{$job_description->job_description_name}}">
                  </div>
                  <div class="form-group">
                      <label for="description">Job Description</label>
                      <textarea class="form-control" name="description" id="description" rows="3">{{$job_description->description}}</textarea>
                  </div>
                  <button type="submit" class="btn btn-primary float-right">Save</button>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection