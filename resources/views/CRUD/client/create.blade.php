@extends('layouts.layout')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create User</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('dashboard.clients.store') }}" method="POST" enctype="multipart/form-data>
        @csrf
        @method('POST')
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="form-group">
          <label for="exampleInputPhone">Phone</label>
          <input type="number" class="form-control" id="exampleInputPhone" placeholder="Enter Phone" name="phone">
        </div>
        {{-- <div >
          <label for="">photo</label>
          <input type="file" class="" name="image">
          @error('photo')
          <small class="form-text text-danger">{{$message}}</small>
          @enderror
        </div> --}}
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  @endsection