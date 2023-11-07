@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('kategori_kelompok.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="">Nama Kelompok Ukulele</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Kelompok Ukulele..." name="nama_kelompok_ukulele" value="{{ old('nama_kelompok_ukulele') }}">
                        @error('nama_kelompok_ukulele')<small class="text-danger">{{$message}}</small>@enderror
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
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {

            }
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    CKEDITOR.replace('editor', {

        filebrowserUploadMethod: 'form'
    });
</script>
@endsection