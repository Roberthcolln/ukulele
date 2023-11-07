@extends('layouts.index')
@section('content')
<div class="tempat">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title">{{ $title }} </h3> -->
                <a href="{{ route('peserta.index') }}" class="btn btn-warning" style="float: right;"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body table table-responsive">
                <table class="table">
                    <tr>
                        <th style="width: 30%;">Nama Peserta</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->nama_peserta }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Nama PIC Kelompok</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Telepon</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->tlp_peserta }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Alamat</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->alamat_peserta }}</td>
                    </tr>

                    <tr>
                        <th style="width: 30%;">Kecamatan</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $kecamatan->nama_kecamatan }}</td>
                    </tr>

                    <tr>
                        <th style="width: 30%;">Kabupaten</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $kabupaten->nama_kabupaten }}</td>
                    </tr>

                    <tr>
                        <th style="width: 30%;">Provinsi</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->provinsi_peserta }}</td>
                    </tr>

                    <tr>
                        <th style="width: 30%;">Tempat Lahir</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->tempat_lahir_peserta }}</td>
                    </tr>

                    <tr>
                        <th style="width: 30%;">Jenis Kelamin</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->jenis_kelamin_peserta }}</td>
                    </tr>

                    <tr>
                        <th style="width: 30%;">Nama Kelompok Ukulele</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->nama_kelompok_ukulele_peserta }}</td>
                    </tr>

                    <tr>
                        <th style="width: 30%;">ID Peserta</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $id_peserta }}</td>
                    </tr>

                    <tr>
                        <th style="width: 30%;">QR Code</th>
                        <th style="width: 20px;">:</th>
                        <td>
                            {!! QrCode::size(100)->generate($id_peserta); !!}
                            <p class="text-left mt-2">Scan me to return ID Peserta.</p>
                        </td>
                    </tr>

                    <tr>
                        <th style="width: 30%;">Foto</th>
                        <th style="width: 20px;">:</th>
                        <td>
                            <img src="{{ asset('file/peserta/'.$data->foto_peserta) }}" alt="" width="200">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection