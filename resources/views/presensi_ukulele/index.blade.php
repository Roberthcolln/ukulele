@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
                <a href="{{ route('presensi_ukulele.create') }}" id="scan" class="btn btn-dark btn-sm mr-2" style="float: right;"><i class="fas fa-list"></i> Absen Sekarang</a>
            </div>
            <div class="card-body table table-responsive">
                @if ($message = Session::get('sukses'))
                <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <table class="table table-bordered" id="example1">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Ukulele</th>
                            <th scope="col">Status Kehadiran</th>
                            <th scope="col">Waktu Presensi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $row )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->id_ukulele}}</td>
                            <td>{{$row->status_kehadiran}}</td>
                            <td>{{ $row->waktu_presensi }}</td>
                            <td>
                                <a href="{{ route('presensi_ukulele.show', $row->id_ukulele) }}" class="btn btn-xs btn-primary"><i class="fas fa-eye"></i> Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

