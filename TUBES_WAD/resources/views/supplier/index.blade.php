@extends('layouts.layout')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Daftar Supplier</h1>
            <a href="/admin/supplier/create" class="btn btn-primary my-3">Tambah Data Supplier</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @elseif (session('status1'))
            <div class="alert alert-danger">
                {{ session('status1') }}
            </div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama Supplier</th>
                        <th scope="col">Alamat Supplier</th>
                        <th scope="col">No. Telp Supplier</th>
                        <th scope="col">Email Supplier</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $suppliers as $supplier )
                    <tr>
                        <td>{{ $supplier->nama_supplier }}</td>
                        <td>{{ $supplier->alamat }}</td>
                        <td>{{ $supplier->no_telp }}</td>
                        <td>{{ $supplier->email }}</td>
                        <td>
                            <a href="/supplier/{{ $supplier->supplier_id }}" class="btn btn-info">Detail</a>
                            <a href="/supplier/{{ $supplier->supplier_id }}/edit" class="btn btn-success">Ubah</a>
                            <form action="/supplier/{{ $supplier->supplier_id }}" method="post" class="d-inline">
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
    </div>
</div>
@endsection
