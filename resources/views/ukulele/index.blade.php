@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
                <a href="{{ route('cetak_semua_sctiker_ukulele.index') }}" class="btn btn-warning btn-sm ml-2" style="float: right;" target="_blank"><i class="fas fa-print"></i> Cetak Semua</a>
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
                            <th scope="col">Nama Peserta</th>
                            <th scope="col">ID Ukulele</th>
                            <th scope="col">QR CODE</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    <tbody>
                        @foreach( $data as $row )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->nama_peserta_ukulele }}</td>
                            <td>{{ 'U' . str_pad( $row->id_kabupaten_ukulele,2,'0', STR_PAD_LEFT) . '-' . str_pad( $row->id_peserta_ukulele,5,'0', STR_PAD_LEFT); }}</td>
                            <td>
                                {!! QrCode::size(100)->generate('U' . str_pad( $row->id_kabupaten_ukulele,2,'0', STR_PAD_LEFT) . '-' . str_pad( $row->id_peserta_ukulele,5,'0', STR_PAD_LEFT)); !!}
                                <p class="text-left mt-2">Scan me to return ID Ukulele.</p>
                            </td>
                            <td>
                                <a href="{{ route('cetak_stiker_ukulele.show', $row->id_peserta_ukulele) }}" class="btn btn-primary btn-xs" target="_blank"><i class="fas fa-edit"> Cetak Stiker</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection