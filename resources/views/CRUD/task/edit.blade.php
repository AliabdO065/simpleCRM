@extends('layouts.layout')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">update task</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('dashboard.tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputtasks">task</label>
            <input type="text" class="form-control" id="exampleInputtasks" value="{{$task->name}}" name="name">
          </div>
          <div class="form-group">
            <label for="exampleInputclient">id of user</label>
            <input type="number" class="form-control" id="exampleInputclient" value="{{$task->user_id}}" name="user_id">
          </div>
        </div>      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  @endsection