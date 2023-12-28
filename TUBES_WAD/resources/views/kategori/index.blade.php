@extends('layouts.layout')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Daftar Kategori</h1>
            <a href="/admin/kategori/create" class="btn btn-primary my-3">Tambah Data Kategori</a>
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
                        <th scope="col">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $kategori as $kategori )
                    <tr>
                        <td>{{ $kategori->nama_kategori }}</td>
                        <td>
                            <a href="/admin/kategori/{{ $kategori->kategori_id }}/edit" class="btn btn-success">Ubah</a>
                            <form action="/admin/kategori/{{ $kategori->kategori_id }}" method="post" class="d-inline">
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
