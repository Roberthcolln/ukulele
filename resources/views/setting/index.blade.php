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
                    <strong>Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="row g-3" method="POST" action="{{ route('setting.update', $setting->id_setting) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Nama Perusahaan</label>
                        <input type="text" name="perusahaan_setting" class="form-control" value="{{ $setting->perusahaan_setting }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Pimpinan</label>
                        <input type="text" name="pimpinan_setting" class="form-control" value="{{ $setting->pimpinan_setting }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Meta Keyword</label>
                        <input type="text" name="keyword_setting" class="form-control" value="{{ $setting->keyword_setting }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Meta Deskripsi</label>
                        <input type="text" name="deskripsi_setting" class="form-control" value="{{ $setting->deskripsi_setting }}">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="">Tentang</label>
                        <textarea name="tentang_setting" id="editor" cols="30" rows="10" class="form-control">{{ $setting->tentang_setting }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Logo Perusahaan</label>
                        <input type="file" class="form-control" name="logo_setting" placeholder="" accept="image/*" id="preview_gambar" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Preview Foto</label>
                        <img src="{{ asset('logo/'.$setting->logo_setting) }}" alt="" style="width: 200px;" id="gambar_nodin">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="">Alamat</label>
                        <textarea name="alamat_setting" class="form-control" rows="3">{{ $setting->alamat_setting }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">No. Hp</label>
                        <input type="text" name="no_hp_setting" class="form-control" value="{{ $setting->no_hp_setting }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email_setting" class="form-control" value="{{ $setting->email_setting }}">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="">Link Maps</label>
                        <textarea name="" class="form-control" rows="3">{{ $setting->maps_setting }}</textarea>
                    </div>
                    <iframe class="w-100 rounded" src="{{ $setting->maps_setting }}" frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark" style="float: right"> <i class="fas fa-save"> </i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
    @section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '',
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "",
            filebrowserUploadMethod: 'form'
        });
    </script>
    @endsection