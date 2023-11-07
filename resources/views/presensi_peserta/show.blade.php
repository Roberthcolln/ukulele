@extends('layouts.index')
@section('content')
<div class="data">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title">{{ $title }} </h3> -->
                <a href="{{ route('presensi_peserta.index') }}" class="btn btn-warning" style="float: right;"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body table table-responsive">
                <table class="table">
                    <tr>
                        <th style="width: 30%;">Nama</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $result->nama_peserta }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Tlp</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $result->tlp_peserta }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Alamat</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $result->alamat_peserta }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Kecamatan</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $result->id_kecamatan_peserta }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Kabupaten</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $result->id_kabupaten_peserta }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Provinsi</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $result->provinsi_peserta }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Tempat, Tanggal Lahir </th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $result->tempat_lahir_peserta }}, {{ $result->tanggal_lahir_peserta }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Jenis Kelamin</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $result->jenis_kelamin_peserta }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Nama Kelompok Ukulele</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $result->nama_kelompok_ukulele_peserta }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Foto</th>
                        <th style="width: 20px;">:</th>
                        <td><img src="{{ asset('file/peserta/'.$result->foto_peserta) }}" alt="" style="width: 100px;"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    let mapOptions = {
        center: [-3.694430, 128.181305],
        zoom: 15
    }
    let map = new L.map('map', mapOptions);

    let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
    map.addLayer(layer);

    let marker = null;
    map.on('click', (event) => {

        if (marker !== null) {
            map.removeLayer(marker);
        }
        marker = L.marker([event.latlng.lat, event.latlng.lng]).addTo(map);
        document.getElementById('latitude').value = event.latlng.lat;
        document.getElementById('longitude').value = event.latlng.lng;

    })
</script>
@endsection