@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Daftar Karyawan</h1>
            <a href="/admin/karyawan/create" class="btn btn-primary my-3">Tambah Data Karyawan</a>
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
                        <th scope="col">No.</th>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Alamat Karyawan</th>
                        <th scope="col">No. Telp Karyawan</th>
                        <th scope="col">Email Karyawan</th>
                        <th scope="col">Shift</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach( $karyawan as $karyawan )
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $karyawan->nama_karyawan }}</td>
                        <td>{{ $karyawan->alamat }}</td>
                        <td>{{ $karyawan->no_telp }}</td>
                        <td>{{ $karyawan->email }}</td>
                        <td>{{ $karyawan->shift }}</td>
                        <td>
                            <a href="/admin/karyawan/{{ $karyawan->karyawan_id }}/edit" class="btn btn-success">Ubah</a>
                            <form action="/admin/karyawan/{{ $karyawan->karyawan_id }}" method="post" class="d-inline">
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
