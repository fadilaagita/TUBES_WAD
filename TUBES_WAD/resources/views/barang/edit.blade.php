@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Edit Barang</h1>
            <form method="post" action="/admin/barang/{{ $barang->id }}">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" placeholder="Masukkan barang" name="nama_barang" value="{{ $barang->nama_barang }}">
                    @error('nama_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kategori_id" class="form-label"> Kategori Barang</label>
                    <select class="form-select @error('kategori_id') is-invalid @enderror" aria-label="Default select example" name="kategori_id">
                        <option value="" disabled selected>Pilih Kategori Barang</option>
                        @foreach($kategoris as $kategori)
                            <option value="{{ $kategori->kategori_id }}" {{ $kategori->kategori_id == $barang->kategori_id ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan harga barang" name="harga" value="{{ $barang->harga }}">
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stok Barang</label>
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="Masukkan stok barang" name="stock" value="{{ $barang->stock }}">
                    @error('stock')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan deskripsi barang" name="deskripsi" value="{{ $barang->deskripsi }}">
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="supplier_id" class="form-label">Nama Supplier</label>
                    <select class="form-select @error('supplier_id') is-invalid @enderror" aria-label="Default select example" name="supplier_id">
                        <option value="" disabled selected>Pilih Supplier</option>
                        @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->supplier_id }}" {{ $supplier->supplier_id == $barang->supplier_id ? 'selected' : '' }}>
                                {{ $supplier->nama_supplier }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" id="tanggal_masuk" placeholder="Masukkan tanggal masuk" name="tanggal_masuk" value="{{ \Carbon\Carbon::parse($barang->tanggal_masuk)->format('Y-m-d') }}">
                </div>
                <div class="mb-3">
                    <label for="karyawan_id">Nama Karyawan yang Bertugas</label>
                    <select class="form-select @error('karyawan_id') is-invalid @enderror" aria-label="Default select example" name="karyawan_id">
                        <option value="" disabled selected>Pilih Karyawan</option>
                        @foreach($karyawans as $karyawan)
                            <option value="{{ $karyawan->karyawan_id }}" {{ $karyawan->karyawan_id == $barang->karyawan_id ? 'selected' : '' }}>
                                {{ $karyawan->nama_karyawan }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection
