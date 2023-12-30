<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    //
    protected $model;
    public function __construct(Karyawan $karyawan)
    {
        $this->model = $karyawan;
    }

    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required|unique:karyawans',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required|email',
            'shift' => 'required'
        ]);

        Karyawan::create([
            'nama_karyawan' => $request->nama_karyawan,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'shift' => $request->shift
        ]);

        return redirect()->route('karyawan.index')->with('success', 'Karyawan Berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', compact('karyawan'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'shift' => 'required'
        ]);
        // dd($request);
        $karyawan = Karyawan::find($id);
        $karyawan->update([
            'nama_karyawan'=>$request->nama_karyawan,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'shift' => $request->shift
            
        ]);

        if (!$karyawan) {
            return redirect()->route('karyawan.index')->with('error', 'Karyawan Tidak ditemukan.');
        }
        

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diupdate!');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus!');
    }

    
}
