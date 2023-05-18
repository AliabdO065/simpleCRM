@extends('layouts.layout')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">update project</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputproject">Name of project</label>
          <input type="text" class="form-control" id="exampleInputproject" value="{{$project->name}}" name="name">
        </div>
        <div class="form-group">
          <label for="exampleInputclient">id of client</label>
          <input type="number" class="form-control" id="exampleInputclient" value="{{$project->client_id}}" name="client_id">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  @endsection