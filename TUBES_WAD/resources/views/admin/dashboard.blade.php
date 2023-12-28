@extends('layouts.layout')

@extends('layouts.sidebar')
<style>
    .container {
        max-width: 1000px;
    }

    .manual {
        padding-left: 100px;
        padding-right: 100px;
        margin-left: auto;
        margin-right: auto;
    }
    .table {
        table-layout: auto;
    }
</style>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Daftar Barang</h1>
            <a href="/admin/barang/create" class="btn btn-primary my-3">Tambah Data Barang</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @elseif (session('status1'))
            <div class="alert alert-danger">
                {{ session('status1') }}
            </div>
            @endif
        </div>
    </div>
</div>
<div class="manual">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Kategori Barang</th>
                <th scope="col">Stok Barang</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Nama Supplier</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Karyawan Bertugas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $barangs as $barang )
            <tr>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->harga }}</td>
                <td>{{ $barang->kategori->nama_kategori }}</td>
                <td>{{ $barang->stock }}</td>
                <td>{{ $barang->deskripsi }}</td>
                <td>{{ $barang->supplier->nama_supplier }}</td>
                <td>{{ date('d F Y', strtotime($barang->tanggal_masuk)) }}</td>
                <td>{{ $barang->karyawan->nama_karyawan }}</td>
                <td>
                    <a href="/admin/barang/{{ $barang->id }}/edit" class="btn btn-success">Ubah</a>
                    <form action="/admin/barang/{{ $barang->barang_id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
