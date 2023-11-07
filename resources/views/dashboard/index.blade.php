@extends('layouts.index')
@section('content')
<?php
$title = 'Dashboard';
?>

<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$pic}}</h3>
          <p>Total PIC</p>
        </div>
        <div class="icon">
          <i class="fas fa-user"></i>
        </div>
        <a href="{{route('pic_kelompok_ukulele.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$peserta}}<sup style="font-size: 20px"></sup></h3>
          <p>Total Peserta</p>
        </div>
        <div class="icon">
          <i class="fas fa-building"></i>
        </div>
        <a href="{{route('peserta.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$ukulele}}<sup style="font-size: 20px"></sup></h3>
          <p>Total Ukulele</p>
        </div>
        <div class="icon">
          <i class="fas fa-building"></i>
        </div>
        <a href="{{route('ukulele.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
</div>

  <!-- <div class="row">
    <div class="col-lg-4 col-6"> -->
  <!-- small box -->
  <!-- <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$presensi_pic}}</h3>
          <p>Total Presensi PIC</p>
        </div>
        <div class="icon">
          <i class="fas fa-user"></i>
        </div>
        <a href="{{route('presensi_pic.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div> -->
  <!-- </div>
    <div class="col-lg-4 col-6"> -->
  <!-- small box -->
  <!-- <div class="small-box bg-success">
        <div class="inner">
          <h3>10.000<sup style="font-size: 20px"></sup></h3>
          <p>Total Presensi Peserta</p>
        </div>
        <div class="icon">
          <i class="fas fa-building"></i>
        </div>
        <a href="{{route('peserta.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-6"> -->
  <!-- small box -->
  <!-- <div class="small-box bg-warning">
        <div class="inner">
          <h3><sup style="font-size: 20px"></sup></h3>
          <p>Total Presensi Ukulele</p>
        </div>
        <div class="icon">
          <i class="fas fa-building"></i>
        </div>
        <a href="{{route('ukulele.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div> -->
  <!-- </div>
  </div>
</div> -->

  <!-- <div class="row">
  <div class="col-sm-12 col-md-6">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">
          Data Admin
        </h5>
      </div>
      <div class="card-body table table-responsive">
        <table class="table table-bordered" id="example4">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">
          Data User
        </h5>
      </div>
      <div class="card-body table table-responsive">
        <table class="table table-bordered" id="example5">
          <thead>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No. Hp</th>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div> -->
  @endsection