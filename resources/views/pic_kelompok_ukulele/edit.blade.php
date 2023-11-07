@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('pic_kelompok_ukulele.update',$data->id_pic_kelompok) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- nama -->
                    <div class="form-group mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama PIC disini..." name="name" value="{{ $data->name }}">
                        @error('name') <small class="text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir nama -->

                    <!-- email -->
                    <div class="form-group mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" placeholder="Masukkan email disini..." name="email" value="{{ $data->email }}">
                        @error('email') <small class="text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir email -->

                    <!-- telepon -->
                    <div class="form-group mb-3">
                        <label for="">Telepon</label>
                        <input type="text" class="form-control" placeholder="Masukkan telepon disini..." name="tlp" value="{{ $data->tlp }}">
                        @error('tlp') <small class="text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir telepon -->

                    <!-- alamat -->
                    <div class="form-group mb-3">
                        <label for="">Alamat Lengkap</label>
                        <textarea name="alamat" id="" cols="30" rows="10" class="form-control" placeholder="Termasuk Nama Desa Dan RT">{{ $data->alamat }}</textarea>
                        @error('alamat') <small class=" text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir alamat -->

                    <!-- kecamatan -->
                    <div class="form-group mb-3">
                        <label for="">Kecamatan</label>
                        <select name="kecamatan" id="dropdown4">
                            @foreach( $kecamatan as $row )
                            <option value=""></option>
                            <option @if( $data->kecamatan == $row->id_kecamatan ) selected @endif value="{{ $row->id_kecamatan }}">{{ $row->nama_kecamatan }}</option>
                            @endforeach
                        </select>
                        @error('kecamatan') <small class=" text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir kecamatan -->

                    <!-- kabupaten -->
                    <div class="form-group mb-3">
                        <label for="">Kabupaten/Kota</label>
                        <select name="kabupaten" id="dropdown5">
                            @foreach( $kabupaten as $row )
                            <option value=""></option>
                            <option @if( $data->kabupaten == $row->id_kabupaten ) selected @endif value="{{ $row->id_kabupaten }}">{{ $row->nama_kabupaten }}</option>
                            @endforeach
                        </select>
                        @error('kabupaten') <small class=" text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir kabupaten -->

                    <!-- provinsi -->
                    <div class="form-group mb-3">
                        <label for="">Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" value="Maluku" readonly>
                        @error('provinsi') <small class=" text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir provinsi -->

                    <!-- tempat lahir -->
                    <div class="form-group mb-3">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir disini..." name="tempat_lahir" value="{{ $data->tempat_lahir }}">
                        @error('tempat_lahir') <small class="text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir tempat lahir -->

                    <!-- tanggal lahir -->
                    <div class="form-group mb-3">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Masukkan tanggal Lahir disini..." name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
                        @error('tanggal_lahir') <small class="text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir tanggal lahir -->

                    <!-- jenis kelamin -->
                    <div class="form-group mb-3">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="dropdown2">
                            @foreach( $jenis_kelamin as $row )
                            <option value=""></option>
                            <option @if( $data->jenis_kelamin == $row->jenis_kelamin ) selected @endif value="{{ $row->jenis_kelamin }}">{{ $row->jenis_kelamin }}</option>
                            @endforeach
                        </select>
                        @error('jenis_kelamin') <small class="text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir jenis kelamin -->

                    <!-- kelompok ukulele -->
                    <div class="form-group mb-3">
                        <label for="">Nama Kelompok Ukulele</label>
                        <select name="nama_kelompok_ukulele" id="dropdown3">
                            @foreach( $kelompok_ukulele as $row )
                            <option value=""></option>
                            <option @if( $data->nama_kelompok_ukulele == $row->nama_kelompok_ukulele ) selected @endif value="{{ $row->nama_kelompok_ukulele }}">{{ $row->nama_kelompok_ukulele }}</option>
                            @endforeach
                        </select>
                        @error('nama_kelompok_ukulele') <small class="text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir kelompok ukulele -->

                    <!-- foto -->
                    <div class="form-group mb-2">
                        <label for="">Foto <abbr title="" style="color: black">*</abbr> </label>
                        <input id="inputImg" type="file" accept="image/*" name="foto" class="form-control">
                        @if( $data->foto )
                        <img src="{{ asset('file/pic_kelompok_ukulele/'. $data->foto) }}" alt="" width="150" class="mt-3" id="previewImg">
                        @else
                        <img class="d-none w-25 h-25 my-2" id="previewImg" src="" alt="Preview image">
                        @endif
                        @error('foto')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                    <!-- akhir foto -->

                    <input type="hidden" name="fotoLama" value="{{ $data->foto }}">
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    document.getElementById('inputImg').addEventListener('change', function() {
        // Get the file input value and create a URL for the selected image
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').setAttribute('src', e.target.result);
                document.getElementById('previewImg').classList.add("d-block");
            };
            reader.readAsDataURL(input.files[0]);
        }
    });
</script>
@endsection