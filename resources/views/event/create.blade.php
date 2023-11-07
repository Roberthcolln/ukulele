@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="">Nama Event</label>
                        <input type="text" class="form-control" name="nama_event">
                        @error('nama_event')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Deskripsikan Event</label>
                        <textarea name="deskripsi_event" class="form-control" id="editor" cols="30" rows="10">{{ old('deskripsi_event') }}</textarea>
                        @error('deskripsi_event')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Mulai</label>
                        <input type="date" class="form-control" name="tanggal_mulai">
                        @error('tanggal_mulai')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tanggal_selesai">
                        @error('tanggal_selesai')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Save</button>
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