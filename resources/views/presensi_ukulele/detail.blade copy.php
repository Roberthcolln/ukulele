@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
                <a href="{{ route('pic_tempat.index') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body table table-responsive">
                @if ($message = Session::get('pic_tempat'))
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
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Foto</th>
                        </tr>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->tlp }}</td>
                            <td>{{ $data->tempat_lahir }}</td>
                            <td>{{ $data->tanggal_lahir }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>
                                <img src="{{ asset('file/pic_tempat/'.$data->foto) }}" alt="" width="150">
                            </td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection