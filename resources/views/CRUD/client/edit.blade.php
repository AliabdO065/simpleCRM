@extends('layouts.layout')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">update clients</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('dashboard.clients.update',$client->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" class="form-control" id="exampleInputName" value="{{$client->name}}" name="name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1"  value="{{$client->email}}" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1"  value="{{$client->password}}" name="password">
        </div>
        <div class="form-group">
          <label for="exampleInputPhone">Phone</label>
          <input type="number" class="form-control" id="exampleInputPhone" value="{{$client->phone}}" name="phone">
        </div>
        <div class="">
          <label style="margin-right: 25px" for="exampleInputimage">image</label>
          <input type="file" id="exampleInputimage" placeholder="Enter your image" name="image" value="😯">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  @endsection