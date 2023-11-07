@extends('layouts.web')
@section('isi')
    {{-- Berita --}}
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium" style="color: #4b5320">Berita</p>
                <h1 class="display-5 mb-5">{{ $baca->judul_berita }}</h1>
            </div>
            <div class="row g-4 mb-2">
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="project-item mb-5">
                        <div class="position-relative">
                            <img class="img-fluid"
                                style=" display: block; margin-left: auto; margin-right: auto; width: 100%;"
                                src="{{ asset('file/berita/' . $baca->gambar_berita) }}" alt="{{ $baca->judul_berita }}">
                        </div>
                        <div class="p-4">
                            <a class="d-block h5" href="">{{ $baca->judul_berita }}</a>
                            <span>{!! $baca->isi_berita !!}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Berita End --}}

        {{-- List --}}

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="mb-5">Rekomendasi Berita Terbaru</h1>
                </div>
                <div class="row gy-5 gx-4">
                    @foreach ($berita as $row)
                    <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex h-100">
                            <div class="service-img">
                                <img class="img-fluid" src="{{ asset('file/berita/'.$row->gambar_berita)}}" alt="" style="width: 100%;">
                            </div>
                            <div class="service-text p-5 pt-0">
                                <div class="service-icon">
                                    <img class="img-fluid rounded-circle" src="{{ asset('file/berita/'.$row->gambar_berita)}}" alt="" style="width: 140px; height: 140px;">
                                </div>
                                <h5 class="mb-1">{{ $row->judul_berita }}</h5>
                                <p class="mb-3">{{ $row->nama_kategori_berita }}</p>
    
                                    <p class="mb-4">{!! Str::limit($row->isi_berita, 50, '...') !!} <a href="{{ url('read', $row->slug_berita) }}">Baca Selengkapnya</a> </p>
                                    <a class="btn btn-square rounded-circle" href="{{ url('read', $row->slug_berita) }}"><i class="bi bi-chevron-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
