@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Ubah Data Karyawan</h1>
            <form method="post" action="/admin/karyawan/{{ $karyawan->karyawan_id }}">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                    <input type="text" class="form-control @error('nama_karyawan') is-invalid @enderror" id="nama_karyawan" placeholder="Masukkan nama karyawan" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}">
                    @error('nama_karyawan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Karyawan</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan alamat karyawan" name="alamat" value="{{ $karyawan->alamat }}">
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telp Karyawan</label>
                    <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="Masukkan no. telp karyawan" name="no_telp" value="{{ $karyawan->no_telp }}">
                    @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Karyawan</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email karyawan" name="email" value="{{ $karyawan->email }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                </div>
                <div class="mb-3">
                    <label for="shift" class="form-label">Shift</label>
                    <select class="form-select @error('shift') is-invalid @enderror" id="shift" aria-placeholder="Pilih shift Karyawan" name="shift">
                        <option value="pagi" {{ $karyawan->shift == "Pagi" ? 'selected' : '' }}>Pagi</option>
                        <option value="siang" {{ $karyawan->shift == "Siang" ? 'selected' : '' }}>Siang</option>
                        <option value="malam" {{ $karyawan->shift == "Malam" ? 'selected' : '' }}>Malam</option>
                    </select>
                    @error('shift')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
