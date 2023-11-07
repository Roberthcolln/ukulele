@extends('layouts.index')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    <a href="{{ route('event.create') }}" class="btn btn-dark btn-sm" style="float: right"><i class="fas fa-plus"></i> create</a>
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
                                    <center>Nama Event
                                </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="overflow-x-auto">
                            @foreach( $data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama_event }}</td>
                                <td>
                                    <form action="{{route('event.destroy',$row->id)}}" method="post" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm show_confirm"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                    <a href="{{route('event.edit', $row->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
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