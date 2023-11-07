@extends('layouts.index')
@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('cabang_olahraga.update',$data[0]->id_cabang_olahraga) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="iconLama" value="{{ $data[0]->logo_cabang_olahraga }}">
                    <div class="form-group mb-2">
                        <label for="">Nama Kategori Cabang olahraga</label>
                        <input type="text" class="form-control" name="nama_cabang_olahraga" value="{{ $data[0]->nama_cabang_olahraga }}">
                        @error('nama_cabang_olahraga')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Logo <abbr title="" style="color: black">*</abbr> </label>
                        <input id="inputImg" type="file" accept="image/*" name="logo_cabang_olahraga" class="form-control">
                        @if( $data[0]->logo_cabang_olahraga )
                        <img src="{{ asset('file/cabang_olahraga/'. $data[0]->logo_cabang_olahraga) }}" alt="" width="300" class="mt-3" id="previewImg">
                        @else
                        <img class="d-none w-25 h-25 my-2" id="previewImg" src="" alt="Preview image">
                        @endif
                        @error('logo_cabang_olahraga')<small class="text-danger">{{ $message }}</small>@enderror
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
@endsection