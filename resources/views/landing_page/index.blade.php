<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('logo/logo2.png') }}">

    <title>10K UKULELE WORLD RECORD</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="{{ asset('landing_page/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('landing_page/css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{ asset('landing_page/css/templatemo-festava-live.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- mystyle css -->
    <style>
        .hero-section {
            background-image: url('landing_page/images/hero.gif');
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }
    </style>

</head>

<body>

    <main>
        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <!-- <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Welcome to 10K Ukulele</strong>
                        </p> -->
                    </div>

                </div>
            </div>
        </header>


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{url('/')}}">
                    10K Ukulele
                </a> -->

                <a href="{{ route('login') }}" class="btn custom-btn d-lg-none ms-auto me-4">Login</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Event</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_100">Sponsorship</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_101">Registration</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Contact Us</a>
                        </li>
                    </ul>

                    <a href="{{ route('login')}}" class="btn custom-btn d-lg-block d-none"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </div>
            </div>
        </nav>


        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <small>Welcome To</small>

                        <h2 class="text-white mb-5">10K Ukulele World Record</h2>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="text-white mb-4">About Us</h2>
                            <div class="deskripsi">
                                {!! $about->deskripsi !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding" id="section_3" style="background-color: #F8CB2E;">
            <div class="container" style="margin-top: -60px;">
                <div class="col-12 text-center mb-3 mt-5">
                    <h2 class="mb-4" style="color: black;">Event</h1>
                </div>
                <div class="row mt-5">
                    <div class="col-md text-center">
                        <h4>{{ $event->nama_event }}</h4>
                        <p class="text-dark">{!! $event->deskripsi_event !!}</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md">
                        <h6 class="text-center" id="start_time">{{ date('d F Y', strtotime($event->tgl_mulai)) }}</h6>
                        <p class="text-center text-dark">Counting down in</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <h6 id="end_time"></h6>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section section-padding" id="section_100">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-5">Sponsorship</h2>
                        <div class="row">
                            @foreach ( $sponsorship as $row )
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('file/sponsorship/'.$row->logo) }}" alt="Card image cap" width="15%" height="150px">
                                    <div class="card-body text-center">
                                        <h6>{{ $row->nama_instansi }}</h6>
                                        <a href="{{ $row->situs }}" target="_blank">{{ $row->nama_instansi }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section section-padding" id="section_101">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-5">Registration</h2>
                        <div class="row">
                            <div class="col-md mb-1 text-center">
                                <div class="alert alert-info" role="alert">
                                    Registrasi hanya dapat dilakukan oleh Admin, atau silahkan menggunakan fitur chat whatsapp dibawah ini !
                                </div>
                                <a href="https://wa.me/+6285244088248?text=Halo Admin, Saya ingin mendaftar">
                                    <img src="{{ asset('landing_page/images/icon/whatsapp.png') }}" alt="" width="25%">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding" id="section_3" style="background-color: #212529;">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center mb-3">
                        <h2 class="mb-4" style="color: #F8CB2E;">Meet the Artists</h1>
                    </div>

                    @foreach( $data as $row)
                    <div class="col-md-3 text-center">
                        <div class="artists-thumb">
                            <img src="{{ asset('file/artis/' . $row->foto) }}" alt="" class="rounded-circle" style=" height:150px; width:150px;  ">
                            <h6 class="text-white">{{ $row->name }}</h6>
                            <p style="color: #F8CB2E;">{{ $row->jobdesk }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section class="schedule-section section-padding" id="">
            <div class="container">
                <div class="col-12 text-center mb-3">
                    <h2 class="mb-4" style="color: #F8CB2E;">Participants</h1>
                </div>
                <div class="row mb-5">
                    <div class="col-sm-6 mb-2">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Ukuleles</h5>
                                <a href="#" class="btn btn-primary">Registered <i class="fas fa-guitar"></i> : {{ $ukulele }}</a>
                                <a href="#" class="btn btn-warning">Present <i class="fas fa-guitar"></i> : {{ $presensi_ukulele }}</a>
                                <a href="#" class="btn btn-success">{{ $presentase_ukulele }} %</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Participants</h5>
                                <a href="#" class="btn btn-primary">Registered <i class="fas fa-user"></i> : {{ $peserta }}</a>
                                <a href="#" class="btn btn-warning">Present <i class="fas fa-user"></i> : {{ $presensi_peserta }}</a>
                                <a href="#" class="btn btn-success">{{ $presentase_peserta }} %</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach ( $wilayah_participant as $row )
                    <div class="col-sm-3 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">{{$row->nama_kabupaten}}</h5>
                                <div class="row">
                                    <div class="col md">
                                        <a href="#" class="btn btn-primary btn-sm d-inline">Reg <i class="fas fa-guitar"></i> : {{$peserta}}</a>
                                        <a href="#" class="btn btn-primary btn-sm d-inline">Present : 1200</a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md">
                                        <a href="#" class="btn btn-warning btn-sm d-inline">Reg <i class="fas fa-user"></i> : 1200</a>
                                        <a href="#" class="btn btn-warning btn-sm d-inline">Present :1200</a>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <a href="#" class="btn btn-success btn-sm mt-2">100%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Contact Us</h2>

                        <nav class="d-flex justify-content-center">
                            <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactForm" type="button" role="tab" aria-controls="nav-ContactForm" aria-selected="false">
                                    <h5>Message</h5>
                                </button>

                                <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactMap" type="button" role="tab" aria-controls="nav-ContactMap" aria-selected="false">
                                    <h5>Google Maps</h5>
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
                                @if ($message = Session::get('sukses'))
                                <div class="alert alert-success" role="alert">
                                    {{$message}}
                                </div>
                                @endif
                                <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data" class="custom-form contact-form mb-5 mb-lg-0">
                                    @csrf
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="full_name" id="contact-name" class="form-control" placeholder="Full Name" value="{{ old('full_name') }}">
                                                @error('full_name')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="email" name="email" id="contact-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email / Whatsapp" value="{{ old('email') }}">
                                                @error('email')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <input type="text" name="organization" id="contact-company" class="form-control" placeholder="Organization" value="{{ old('organization') }}">
                                        @error('organization')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        <textarea name="message" rows="3" class="form-control" id="contact-message" placeholder="Message"></textarea>
                                        @error('message')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel" aria-labelledby="nav-ContactMap-tab">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.489093036863!2d128.17120887415217!3d-3.702874643041121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce98997dfca81%3A0x5442714fbb0cb5c3!2sTelkom%20Amboina%20Hall!5e0!3m2!1sid!2sid!4v1691654274425!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>>
                                <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>


    <!-- Footer Start -->
    <div class="container-fluid footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: black">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4">
                    <h4 class="mb-4" style="color: #F8CB2E;">Our Office</h4>
                    <p class="mb-2" style="font-size: 14px;"><i class="fa fa-map-marker-alt me-3"></i>Jl. Dr. Sitanala No. 9, Nusaniwe</p>
                    <p class="mb-2" style="font-size: 14px;"><i class="fa fa-phone-alt me-3"></i>+62 821 9795 3806</p>
                    <p class="mb-2" style="font-size: 14px;"><i class="fa fa-envelope me-3"></i>pintu.kotakita@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://instagram.com/pintukotakita" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://youtube.com/@PintuKotaKita" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="mb-4" style="color: #F8CB2E;">Quick Links</h4>
                    <ul class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link click-scroll text-white" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll text-white" href="#">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll text-white" href="#section_2">Event</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll text-white" href="#sponsorship">Sponsorship</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll text-white" href="#">Registration</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll text-white" href="#section_6">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4 class="mb-4 text-white" style="color: #F8CB2E;">This web has made with Love by <a href="http://www.spunix.id" target="_blank">Spunix.id</a></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- counting down -->
    <script>
        // Set the date we're counting down to
        var start_date = "{{ $event->tgl_mulai }}";
        var countDownDate = new Date(start_date).getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("end_time").innerHTML = days + " Days " + ": " + hours + " Hours " + ": " +
                minutes + " Minutes" + " : " + seconds + " Second ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("end_time").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <!-- akhir counting down -->



    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('landing_page/js/jquery.min.js')}}"></script>
    <script src="{{ asset('landing_page/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('landing_page/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('landing_page/js/click-scroll.js')}}"></script>
    <script src="{{ asset('landing_page/js/custom.js')}}"></script>

</body>

</html>