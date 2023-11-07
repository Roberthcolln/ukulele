<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dispora - {{$title}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('landing_page/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing_page/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('landing_page/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('landing_page/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fas fa-graduation-cap"></i> SMA PGRI Pelita Jaya</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about.index') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">Tentang Kami</a>
                <a href="{{ route('ppdb.index') }}" class="nav-item nav-link {{ request()->is('ppdb') ? 'active' : '' }}">PPDB</a>
                <a href="{{ route('kontak.index') }}" class="nav-item nav-link {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
            </div>
            @if( Auth::user() )
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
              this.closest('form').submit();" class="btn btn-danger py-4 px-lg-5 d-none d-lg-block">Logout <i class="fas fa-sign-out-alt"></i></a>
            </form>
            @else
            <a href="{{ route('login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
            @endif
        </div>
    </nav>
    <!-- Navbar End -->
    @yield('content')
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">Tentang Kami</a>
                    <a class="btn btn-link" href="">Hubungi Kami</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Kontak</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kec. Seram Barat, Kabupaten Seram Bagian Barat, Maluku</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0911 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>smapgri@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5634.6887627965925!2d128.11968629399766!3d-3.006517648798713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6c29442b655629%3A0xae881251601eeda6!2sSMA%20PGRI%20Pelita%20Jaya!5e0!3m2!1sid!2sid!4v1685863526272!5m2!1sid!2sid" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">SMA PGRI Pelita Jaya</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By SMA PGRI Pelita Jaya
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('landing_page/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('landing_page/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('landing_page/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('landing_page/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('landing_page/js/main.js')}}"></script>


    <script>
        $("#dropdown").select2({
            theme: "bootstrap4",
            placeholder: "Silahkan Pilih",
        });
    </script>
    <script>
        $("#dropdown2").select2({
            theme: "bootstrap4",
            placeholder: 'Silahkan pilih',
        });
    </script>
    <script>
        $("#dropdown3").select2({
            theme: "bootstrap4",
            placeholder: 'Silahkan pilih',
        });
    </script>
    <script>
        $("#dropdown4").select2({
            theme: "bootstrap4",
            placeholder: 'Silahkan pilih',
        });
    </script>
    <script>
        $("#dropdown5").select2({
            theme: "bootstrap4",
            placeholder: 'Silahkan pilih',
        });
    </script>
    <script>
        $("#dropdown6").select2({
            theme: "bootstrap4",
            placeholder: 'Silahkan pilih',
        });
    </script>
    <script>
        $("#dropdown7").select2({
            theme: "bootstrap4",
            placeholder: 'Silahkan pilih',
        });
    </script>

</body>

</html>