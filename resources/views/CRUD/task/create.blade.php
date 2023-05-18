@extends('layouts.layout')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create task</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('dashboard.tasks.store') }}" method="POST">
        @csrf
        @method('POST')
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputtasks">task</label>
          <input type="text" class="form-control" id="exampleInputtasks" placeholder="Enter task" name="name">
        </div>
        <div class="form-group">
          <label for="exampleInputclient">id of user</label>
          <input type="number" class="form-control" id="exampleInputclient" placeholder="Enter user id" name="user_id">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  @endsection