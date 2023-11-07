@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama disini..." name="name" value="{{ $anggota->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan email disini..." name="email" value="{{ $anggota->email }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan password disini..">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Masukkan konfirmasi password disini...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Jenis Pengguna</label>
                            <select name="id_kategori_anggota" id="dropdown" class="form-control">
                                <option value=""></option>
                                @foreach ($kategori_anggota as $row)
                                    <option @if ($anggota->id_kategori_anggota == $row->id_kategori_anggota) selected @endif value="{{ $row->id_kategori_anggota }}">{{ $row->nama_kategori_anggota }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Kategori Admin *(Boleh dikosongkan)</label>
                            <select name="id_kategori_admin" id="dropdown3" class="form-control">
                                <option value=""></option>
                                @foreach ($kategori_admin as $row)
                                    <option @if ($anggota->id_kategori_admin == $row->id_kategori_admin) selected  @endif value="{{ $row->id_kategori_admin }}">{{ $row->nama_kategori_admin }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Kategori Pengurus *(Boleh dikosongkan)</label>
                            <select name="id_kategori_pengurus" id="dropdown2" class="form-control">
                                <option value=""></option>
                                @foreach ($kategori_pengurus as $row)
                                    <option @if ($anggota->id_kategori_pengurus == $row->id_kategori_pengurus) selected  @endif value="{{ $row->id_kategori_pengurus }}">{{ $row->nama_kategori_pengurus }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">No. Hp</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                                <input type="number" class="form-control" placeholder="Masukkan nomor hp disini tanpa 0 di awal..." name="no_hp" value="{{ $anggota->no_hp }}">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Pusat</label>
                            <select name="id_pusat" id="pusat-dd" class="form-control">
                                <option value="">Pilih Pusat</option>
                                @foreach ($pusat as $row)
                                <option value="{{ $row->id_pusat }}">{{ $row->nama_pusat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Pilih Region</label>
                            <select name="id_region" id="region-dd" class="form-control">
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Pilih Chapter</label>
                            <select name="id_chapter" id="chapter-dd" class="form-control">
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Pilih Community</label>
                            <select name="id_community" id="dropdown7">
                                <option value=""></option>
                                @foreach ($community as $com)
                                    <option @if ($anggota->id_community == $com->id_community) selected  @endif value="{{ $com->id_community }}">{{ $com->nama_community }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Jabatan *(Boleh Dikosongkan)</label>
                            <input type="text" name="jabatan" class="form-control" placeholder="Masukkan jabatan anggota..." value="{{ $anggota->jabatan }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Pilih Provinsi </label>
                            <select name="id_provinsi" id="dropdown5">
                                <option value=""></option>
                                @foreach ($provinsi as $prov)
                                    <option @if ($anggota->id_provinsi == $prov->id_provinsi)
                                        selected                                        
                                    @endif value="{{ $prov->id_provinsi }}">{{ $prov->nama_provinsi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Pilih Kota </label>
                            <select name="id_kota" id="dropdown6">
                                <option value=""></option>
                                @foreach ($kota as $city)
                                    <option @if ($anggota->id_kota == $city->id_kota)
                                        selected
                                    @endif value="{{ $city->id_kota }}">{{ $city->nama_kota }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" placeholder="Silahkan masukkan alamat disini..." class="form-control" value="{{ $anggota->alamat }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option @if ($anggota->jenis_kelamin == 'Laki-laki')
                                    selected
                                @endif value="Laki-laki">Laki-laki</option>
                                <option  @if ($anggota->jenis_kelamin == 'Perempuan')
                                    selected
                                @endif value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="" class="form-control" value="{{ $anggota->tanggal_lahir }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">NIK</label>
                            <input type="number" name="nik" placeholder="Silahkan masukkan nik disini" class="form-control" value="{{ $anggota->nik }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Foto *(Jika tidak ada silahkan kosongkan saja)</label>
                            <input id="inputImg" type="file" accept="image/*" name="foto" class="form-control" />
                            <img class="d-none w-25 h-25 my-2" id="previewImg" src="#" alt="Preview image">
                        </div>
                    </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-dark">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
