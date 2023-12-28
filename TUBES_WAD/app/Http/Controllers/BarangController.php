<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Karyawan;
use App\Models\Supplier;
use App\Models\Kategori;

class BarangController extends Controller
{
    //
    public function index()
    {
        $barangs = Barang::all();

        foreach($barangs as $barang) {
            $barang->kategori = Kategori::find($barang->kategori_id);
            $barang->supplier = Supplier::find($barang->supplier_id);
            $barang->karyawan = Karyawan::find($barang->karyawan_id);
        }

        return view('admin.dashboard', compact('barangs'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        $suppliers = Supplier::all();
        $karyawans = Karyawan::all();
        return view('barang.create', compact('kategoris', 'suppliers', 'karyawans'));
    }

    public function store (Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kategori_id' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'deskripsi' => 'required',
            'supplier_id' => 'required',
            'tanggal_masuk' => 'required|date',
            'karyawan_id' => 'required'
        ]);

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'deskripsi' => $request->deskripsi,
            'supplier_id' => $request->supplier_id,
            'tanggal_masuk' => $request->tanggal_masuk,
            'karyawan_id' => $request->karyawan_id
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        $kategoris = Kategori::all();
        $suppliers = Supplier::all();
        $karyawans = Karyawan::all();
        return view('barang.edit', compact('barang', 'kategoris', 'suppliers', 'karyawans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kategori_id' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'deskripsi' => 'required',
            'supplier_id' => 'required',
            'tanggal_masuk' => 'required|date',
            'karyawan_id' => 'required'
        ]);

        $barang = Barang::find($id);
        $barang->update([
            'nama_barang' => $request->nama_barang,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'deskripsi' => $request->deskripsi,
            'supplier_id' => $request->supplier_id,
            'tanggal_masuk' => $request->tanggal_masuk,
            'karyawan_id' => $request->karyawan_id
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Barang berhasil diupdate');
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Barang berhasil dihapus');
    }
}
