@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
                <a href="{{ route('cetak_semua_peserta.index') }}" class="btn btn-warning btn-sm ml-2" style="float: right;" target="_blank"><i class="fas fa-print"></i> Cetak Semua</a>
                <a href="{{ route('peserta.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-plus"></i> Tambah</a>
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
                            <th scope="col">Nama PIC</th>
                            <th scope="col">Nama Kelompok Ukulele</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    <tbody>
                        @foreach( $data as $row )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->nama_peserta }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->nama_kelompok_ukulele_peserta }}</td>
                            <td>{{ $row->tlp }}</td>
                            <td>
                            <a href="{{ route('cetak_kartu_peserta.show', $row->id_pic_kelompok) }}" class="btn btn-xs btn-dark" target="_blank"><i class="fas fa-print"></i> Cetak Kartu</a>
                                <a href="{{ route('peserta.edit', $row->id_peserta_ukulele) }}" class="btn btn-primary btn-xs"><i class="fas fa-edit"> Edit</i></a>
                                <a href="{{ route('peserta.show', $row->id_peserta_ukulele) }}" class="btn btn-success btn-xs"><i class="fas fa-eye"> Detail</i></a>
                                <form action="{{ route('peserta.destroy', $row->id_peserta_ukulele) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-xs btn-flat show_confirm"><i class="fas fa-trash"> Delete</i></button>
                                </form>
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