@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
                <a href="{{ route('artis.create') }}" class="btn btn-dark btn-sm mr-2" style="float: right;"><i class="fas fa-plus"></i> Tambah</a>
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
                            <th scope="col">Nama Artis</th>
                            <th scope="col">Job Desk</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $row )
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $row->name }} </td>
                            <td> {{ $row->jobdesk }} </td>
                            <td> {{ $row->tlp }} </td>
                            <td><img src="{{ asset('file/artis/'.$row->foto) }}" alt="" width="70"></td>
                            <td>
                                <form action="{{route('artis.destroy',$row->id)}}" method="post" class="d-inline show-confirm">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-xs show_confirm"><i class="fas fa-trash"></i> Hapus</button>
                                </form>
                                <a href="{{ route('artis.edit', $row->id) }}" class="btn btn-xs btn-secondary"><i class="fas fa-edit"></i> Edit</a>
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