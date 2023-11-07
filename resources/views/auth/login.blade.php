<?php
$konf = DB::table('setting')->first();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>10K Ukulele Event | Login</title>
  <link rel="shortcut icon" href="{{ asset('koper.png') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-danger">
      <div class="card-header text-center">
        <!-- <a href="{{ route('login') }}" class="h1 text-center"><img src="{{ asset('logo/'.$konf->logo_setting) }}" class="img-fluid" alt="" style="max-width: 200px; max-height: 150px;"></a> -->
        <h5 class="text-secondary">Login</h5>
      </div>
      @if ($message = Session::get('registrasi'))
      <div class="alert alert-success">
        <p class="m-0">{{ $message }}</p>
      </div>
      @endif
      <div class="card-body">
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <label for="">Email:</label>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <label for="">Password:</label>
          <div class="input-group mb-3">
            <input type="password" name="password" class="input form-control" placeholder="Password" id="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
            <div class="input-group-append">
              <span class="input-group-text" onclick="password_show_hide();">
                <i class="fas fa-eye" id="show_eye"></i>
                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Ingat saya
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mb-1" style="float: right">
          <!-- <a href="{{ route('password.request') }}">Lupa Sandi Anda?</a> -->
        </p>
      </div>
      <!-- /.card-body -->
      <!-- <a href="{{ route('registrasi.create') }}" class="mb-2 text-center btn btn-primary"><i class="fas fa-user-plus"></i> Registrasi disini</a> -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
  <script>
    function password_show_hide() {
      var x = document.getElementById("password");
      var show_eye = document.getElementById("show_eye");
      var hide_eye = document.getElementById("hide_eye");
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
      } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
      }
    }
  </script>
  <!-- jQuery -->
  <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
</body>

</html>