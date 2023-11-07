@extends('layouts.index')
@section('content')
<div class="data">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title">{{ $title }} </h3> -->
                <a href="{{ route('presensi_ukulele.index') }}" class="btn btn-warning" style="float: right;"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body table table-responsive">
                <table class="table">
                    <tr>
                        <th style="width: 30%;">Nama Peserta</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $result->nama_peserta_ukulele }}</td>
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