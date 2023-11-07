@extends('layouts.index')
@section('content')
    <div class="anggota">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }} </h3>
                    <a href="{{ route('anggota.index') }}" class="btn btn-warning" style="float: right;"><i class="fas fa-eye"></i>  Kembali</a>
                </div>
                <div class="card-body table table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width: 30%;">No. Anggota</th>
                            <th style="width: 20px;">:</th>
                            <td>
                                @if ($anggota->id_kategori_anggota == 1)
                                A - {{ str_pad($anggota->id, 5, '0', STR_PAD_LEFT) }}
                                @elseif($anggota->id_kategori_anggota == 2)
                                B - {{ str_pad($anggota->id, 5, '0', STR_PAD_LEFT) }}
                                @else
                                K - {{ str_pad($anggota->id, 5, '0', STR_PAD_LEFT) }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">NIK</th>
                            <th style="width: 20px;">:</th>
                            <td>{{ $anggota->nik }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">Nama</th>
                            <th style="width: 20px;">:</th>
                            <td>{{ $anggota->name }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">Email</th>
                            <th style="width: 20px;">:</th>
                            <td>{{ $anggota->email }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">No. Hp</th>
                            <th style="width: 20px;">:</th>
                            <td>{{ $anggota->no_hp }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">Kota/Kab. & Provinsi Tempat Tinggal</th>
                            <th style="width: 20px;">:</th>
                            <td>{{ $anggota->nama_kota }}, {{ $anggota->nama_provinsi }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">Alamat</th>
                            <th style="width: 20px;">:</th>
                            <td>{{ $anggota->alamat }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">Status</th>
                            <th style="width: 20px;">:</th>
                            <td>{{ $anggota->status }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">Tanggal Lahir</th>
                            <th style="width: 20px;">:</th>
                            <td>{{ Carbon\Carbon::parse($anggota->tanggal_lahir)->isoFormat('dddd, D MMMM Y')  }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">Kategori Anggota</th>
                            <th style="width: 20px;">:</th>
                            <td>{{ $anggota->nama_kategori_anggota }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">Region</th>
                            <th style="width: 20px;">:</th>
                            <td>{{ $anggota->nama_pusat }}, {{ $anggota->nama_region }}, {{ $anggota->nama_chapter }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">Community</th>
                            <th style="width: 20px;">:</th>
                            <td>{{ $anggota->nama_community }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">QR Code</th>
                            <th style="width: 20px;">:</th>
                            <td>{!! QrCode::size(100)->generate($anggota->id) !!}</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">Foto</th>
                            <th style="width: 20px;">:</th>
                            <td><img src="{{ asset('file/foto/'.$anggota->foto) }}" alt="" style="width: 100px;"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
