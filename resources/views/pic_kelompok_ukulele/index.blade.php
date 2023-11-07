@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3> 
                <a href="{{ route('cetak_semua_pic.index') }}" class="btn btn-warning btn-sm" style="float: right;" target="_blank"><i class="fas fa-print"></i> Cetak Semua</a>
                <a href="{{ route('pic_kelompok_ukulele.create') }}" class="btn btn-dark btn-sm mr-2" style="float: right;"><i class="fas fa-plus"></i> Tambah</a>
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
                            <th scope="col">Nama</th>
                            <th scope="col">Nama Kelompok Ukulele</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $row )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->nama_kelompok_ukulele}}</td>
                            <td>{{$row->tlp}}</td>
                            <td>
                                <form action="{{route('pic_kelompok_ukulele.destroy',$row->id_pic_kelompok)}}" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-xs show_confirm"><i class="fas fa-trash"></i> Hapus</button>
                                </form>
                                <a href="{{ route('pic_kelompok_ukulele.edit', $row->id_pic_kelompok) }}" class="btn btn-xs btn-secondary"><i class="fas fa-edit"></i> Edit</a>
                                <a href="{{ route('pic_kelompok_ukulele.show', $row->id_pic_kelompok) }}" class="btn btn-xs btn-primary"><i class="fas fa-eye"></i> Detail</a>
                                <a href="{{ route('cetak_kartu.show', $row->id_pic_kelompok) }}" class="btn btn-xs btn-success" target="_blank"><i class="fas fa-print"></i> Cetak Kartu</a>
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