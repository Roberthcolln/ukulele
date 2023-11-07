@extends('layouts.index')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    <a href="{{ route('kategori_kelompok.create') }}" class="btn btn-dark btn-sm" style="float: right"><i class="fas fa-plus"></i> create</a>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('sukses'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{$message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table id="example3" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>
                                    <center>Nama Kelompok Ukulele
                                </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="overflow-x-auto">
                            @foreach( $data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama_kelompok_ukulele }}</td>
                                <td>
                                    <form action="{{route('kategori_kelompok.destroy',$row->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm show-confirm"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@endsection