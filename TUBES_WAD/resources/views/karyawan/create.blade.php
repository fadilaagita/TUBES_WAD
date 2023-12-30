@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Tambah Data Karyawan</h1>
            <form method="post" action="/admin/karyawan">
                @csrf
                <div class="mb-3">
                    <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                    <input type="text" class="form-control @error('nama_karyawan') is-invalid @enderror" id="nama_karyawan" placeholder="Masukkan nama karyawan" name="nama_karyawan" value="{{ old('nama_karyawan') }}">
                    @error('nama_karyawan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Karyawan</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan alamat karyawan" name="alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telp Karyawan</label>
                    <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="Masukkan no. telp karyawan" name="no_telp" value="{{ old('no_telp') }}">
                    @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Karyawan</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email karyawan" name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                </div>
                <div class="mb-3">
                    <label for="shift" class="form-label">Shift</label>
                    <select class="form-select @error('shift') is-invalid @enderror" aria-label="Default select example" name="shift">
                        <option selected>--Pilih Shift--</option>
                        <option value="pagi">Pagi</option>
                        <option value="siang">Siang</option>
                        <option value="malam">Malam</option>
                    </select>
                    @error('shift')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
