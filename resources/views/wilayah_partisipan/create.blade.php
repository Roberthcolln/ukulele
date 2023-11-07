@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('wilayah_participant.store') }}" method="POST">
                    @csrf
                    @method('POST')

                    <!-- wilayah -->
                    <div class="form-group mb-3">
                        <label for="">Kabupaten/Kota</label>
                        <select name="id_wilayah" id="dropdown5">
                            @foreach( $kabupaten as $row )
                            <option value=""></option>
                            <option value="{{ $row->id_kabupaten }}">{{ $row->nama_kabupaten }}</option>
                            @endforeach
                        </select>
                        @error('id_wilayah') <small class=" text-danger"> {{ $message }} </small> @enderror
                    </div>
                    <!-- akhir wilayah -->
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark btn-sm">Save</button>
                <a href="{{route('wilayah_participant.index')}}" class="btn btn-danger btn-sm" onclick="return confirm('Batal input data?')">Batalkan</a>
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