@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    <a href="{{ route('anggota.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i
                            class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body table table-responsive">
                    @if ($message = Session::get('Sukses'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Anggota</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Anggota</th>
                                <th scope="col">Email</th>
                                <th scope="col">No. HP</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        <tbody>
                            @foreach ($anggota as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($row->id_kategori_anggota == 1)
                                        A - {{ str_pad($row->id, 5, '0', STR_PAD_LEFT) }}
                                        @elseif($row->id_kategori_anggota == 2)
                                        B - {{ str_pad($row->id, 5, '0', STR_PAD_LEFT) }}
                                        @else
                                        K - {{ str_pad($row->id, 5, '0', STR_PAD_LEFT) }}
                                        @endif
                                    </td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->nama_kategori_anggota }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>+62{{ $row->no_hp }}</td>
                                    <td>{{ $row->status }}</td>
                                    <td>
                                        <a href="{{ route('anggota.edit', $row->id) }}" class="btn btn-primary btn-xs" style="display: inline-block"><i class="fas fa-edit">Edit</i></a>
                                        <a href="{{ route('anggota.show', $row->id) }}" class="btn btn-warning btn-xs" style="display: inline-block"><i class="fas fa-eye"> Detail</i></a>
                                        <a href="{{ url('anggota/cetak-kartu', $row->id) }}" class="btn btn-success btn-xs" style="display: inline-block" target="_blank"><i class="fas fa-print"> Print</i></a>
                                        <form action="{{ route('anggota.destroy', $row->id) }}"
                                            method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-xs btn-flat show_confirm"><i
                                                    class="fas fa-trash"> Delete</i></button>
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
