@extends('layouts.layout')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">update User</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" class="form-control" id="exampleInputName" value="{{$user->name}}" name="name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user->email}}" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" value="{{$user->password}}" name="Password">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  @endsection