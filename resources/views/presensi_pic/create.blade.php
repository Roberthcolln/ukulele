@extends('layouts.index')
@section('content')
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
      </div>
      <div class="card-body">
        @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-dismissible fade show col-md" role="alert">
          {{$message}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        @if ($message = Session::get('gagal'))
        <div class="alert alert-warning alert-dismissible fade show col-md" role="alert">
          {{$message}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <form action="{{ route('presensi_pic.store') }}" method="POST" enctype="multipart/form-data" id="form">
          @csrf
          @method('POST')
          <!-- nama -->
          <div class="form-group mb-3">
            <label for="">ID PIC</label>
            <input type="text" class="form-control" placeholder="Masukkan ID PIC disini..." name="id_pic" value="{{ old('id_pic') }}" id="id_pic">
            @error('id_pic') <small class="text-danger"> {{ $message }} </small> @enderror
          </div>
          <!-- akhir nama -->

          <!-- preview -->
          <div class="form-group">
            <video id="preview" class="col-md-4"></video><br>
            <p class="text-info">Posisikan QR Code Anda didalam Kotak</p>
          </div>
          <!-- akhir preview -->
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-dark btn-sm">Save</button>
        <a href="{{route('presensi_pic.index')}}" class="btn btn-danger btn-sm" onclick="return confirm('Keluar?')">Keluar</a>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<!-- script instascan -->
<script type="text/javascript">
  let scanner = new Instascan.Scanner({
    video: document.getElementById('preview')
  });
  scanner.addListener('scan', function(content) {
    console.log(content);
  });
  Instascan.Camera.getCameras().then(function(cameras) {
    if (cameras.length > 0) {
      scanner.start(cameras[0]);
    } else {
      console.error('No cameras found.');
    }
  }).catch(function(e) {
    console.error(e);
  });
  scanner.addListener('scan', function(c) {
    document.getElementById('id_pic').value = c;
    document.getElementById('form').submit();
  })
</script>
@endsection