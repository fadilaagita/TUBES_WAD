@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Tambah Data Kategori</h1>
            <form method="post" action="/admin/kategori">
                @csrf
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control @error('nama_karyawan') is-invalid @enderror" id="nama_kategori" placeholder="Masukkan kategori" name="nama_kategori" value="{{ old('nama_kategori') }}">
                    @error('nama_kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Kategori</button>
            </form>
        </div>
    </div>
</div>
@endsection