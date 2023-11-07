@extends('layouts.index')
@section('content')
<div class="tempat">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title">{{ $title }} </h3> -->
                <a href="{{ route('contact.index') }}" class="btn btn-warning" style="float: right;"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body table table-responsive">
                <table class="table">
                    <tr>
                        <th style="width: 30%;">Nama Lengkap</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->full_name }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Email</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Organisasi</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->organization }}</td>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Isi Pesan</th>
                        <th style="width: 20px;">:</th>
                        <td>{{ $data->message }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection