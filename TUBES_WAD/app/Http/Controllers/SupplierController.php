<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    //
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required|email'
        ]);

        Supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email
        ]);

        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil ditambahkan');
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required|email'
        ]);

        $supplier = Supplier::find($id);
        $supplier->update([
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email
        ]);

        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil diupdate');
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil dihapus');
    }
}
