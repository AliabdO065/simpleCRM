@extends('layouts.layout')

@section('content')
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">Messages</span>
      <span class="info-box-number">110</span>
    </div>
  </div>
  </div>


    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">CPU Traffic</span>
          <span class="info-box-number">
            10
            <small>%</small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Likes</span>
          <span class="info-box-number">41,410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Sales</span>
          <span class="info-box-number">760</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">New Members</span>
          <span class="info-box-number">2,000</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    {{-- <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box bg-gradient-warning">
        <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Events</span>
          <span class="info-box-number">41,410</span>
          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
          <span class="progress-description">
            70% Increase in 30 Days
          </span>
        </div>
      </div>
    </div> --}}

  </div>
@endsection