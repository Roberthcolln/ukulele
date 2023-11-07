@extends('layouts.index')
@section('content')
<div class="data">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title">{{ $title }} </h3> -->
                <a href="{{ route('pic_kelompok_ukulele.index') }}" class="btn btn-warning" style="float: right;"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body table table-responsive">
                <table class="table">
                    <tr>
                        <th style="width: 30%;">Nama</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Email</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Tlp</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->tlp }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Alamat</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Kecamatan</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->nama_kecamatan }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Kabupaten</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->nama_kabupaten }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Provinsi</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->provinsi }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Tempat, Tanggal Lahir </th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Jenis Kelamin</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Nama Kelompok Ukulele</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->nama_kelompok_ukulele }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">ID Panitia</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $id_panitia }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">QR Code</th>
                        <th style="width: 20px;">:</th>
                        <td>
                                {!! QrCode::size(100)->generate($id_panitia); !!}
                                <p class="text-left mt-2">Scan me to return ID Panitia.</p>
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Foto</th>
                        <th style="width: 20px;">:</th>
                        <td><img src="{{ asset('file/pic_kelompok_ukulele/'.$data->foto) }}" alt="" style="width: 100px;"></td>
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