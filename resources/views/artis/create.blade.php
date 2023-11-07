@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('artis.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <!-- nama -->
                    <div class="form-group mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Artis disini..." name="name" value="{{ old('name') }}">
                        @error('name') <small class="text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir nama -->

                    <!-- jobdesk -->
                    <div class="form-group mb-3">
                        <label for="">Jobdesk</label>
                        <select name="jobdesk" id="dropdown8" class="form-control">
                            <option value=""></option>
                            <option value="Artis">Artis</option>
                            <option value="Penyanyi">Penyanyi</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        @error('name') <small class="text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir jobdesk -->

                    <!-- telepon -->
                    <div class="form-group mb-3">
                        <label for="">Telepon</label>
                        <input type="text" class="form-control" placeholder="Masukkan telepon disini..." name="tlp" value="{{ old('tlp') }}">
                        @error('tlp') <small class="text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir telepon -->

                    <!-- foto -->
                    <div class="form-group mb-2">
                        <label for="">Foto <abbr title="" style="color: black">*</abbr> </label>
                        <input id="inputImg" type="file" accept="image/*" name="foto" class="form-control">
                        <img class="d-none w-25 h-25 my-2" id="previewImg" src="#" alt="Preview image">
                        @error('foto') <small class="text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir foto -->

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark btn-sm">Save</button>
                <a href="{{route('pic_kelompok_ukulele.index')}}" class="btn btn-danger btn-sm" onclick="return confirm('Batal input data?')">Batalkan</a>
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